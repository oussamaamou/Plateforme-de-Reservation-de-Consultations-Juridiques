<?php 

// Fonction de Modification du Profile 
function updateAccountClient($ID, $nom, $prenom, $telephone, $email, $password, $photo) {
    global $conn;

    $params = [$nom, $prenom, $telephone, $email];
    $updatePassword = '';
    $updatePhoto = '';

    if (!empty($password)) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $params[] = $password;  
        $updatePassword = ", Mot_de_passe = ?";
    }

    if (!empty($photo)) {
        $params[] = $photo;  
        $updatePhoto = ", Photo = ?";
    }

    $params[] = $ID;

    $sql = "UPDATE utilisateur SET Nom = ?, Prenom = ?, Telephone = ?, Email = ?" . $updatePassword . $updatePhoto . " WHERE ID = ?";

    $stmt = $conn->prepare($sql);

    $types = str_repeat('s', count($params) - 1);  
    $types .= 'i'; 

    $stmt->bind_param($types, ...$params);

    $result = $stmt->execute();
    $stmt->close();

    return $result;  
}
    
    
// Afficher le Profile Client
function getClientProfile($ID) {
    global $conn;
    $stmt = $conn->prepare("SELECT Nom, Prenom, Photo, Telephone, Email, Mot_de_passe FROM utilisateur WHERE ID = ?");
    $stmt->bind_param("i", $ID);
    $stmt->execute();

    $stmt->bind_result($Nom, $Prenom, $Photo, $Telephone, $Email, $Mot_de_passe);

    if($stmt->fetch()){
        return [
            'Nom' => $Nom,
            'Prenom' => $Prenom,
            'Photo' => $Photo,
            'Telephone' => $Telephone,
            'Email' => $Email,
            'Mot_de_passe' => $Mot_de_passe
        ];
    }
    else{
        return null;
    }
}

// Afficher les Consultations des Avocats
function getAllConsultations(){
    global $conn;
    $result = $conn->query("SELECT * FROM utilisateur WHERE Role = 'Avocat' ");
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Reserver une Consultation
function addReservation($ID_Client, $ID_Avocat, $Date_Consultation, $Statut) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO reservation (ID_Client, ID_Avocat, Date_Consultation, Statut) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiss",$ID_Client, $ID_Avocat, $Date_Consultation, $Statut);
    return $stmt->execute();
}

// Afficher les Reservations
function getAllReservation($client_id){
    global $conn;

    $sql = "
        SELECT 
            r.ID AS reservation_id, 
            r.Date_Consultation, 
            r.Statut, 
            c.Nom AS client_nom, 
            c.Prenom AS client_prenom, 
            c.Email AS client_email, 
            c.Photo AS client_photo,
            a.Nom AS avocat_nom, 
            a.Prenom AS avocat_prenom,
            a.Email AS avocat_email,
            a.Photo AS avocat_photo
        FROM 
            reservation r
        JOIN 
            utilisateur c ON r.ID_Client = c.ID
        JOIN 
            utilisateur a ON r.ID_Avocat = a.ID
        WHERE 
            r.ID_Client = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $client_id);
    $stmt->execute();
    $result = $stmt->get_result();

    return $result->fetch_all(MYSQLI_ASSOC);

    $conn->close();
}


// Annuler une Reservation
function annulerReservation($id) {
    global $conn;

    $stmt = $conn->prepare("DELETE FROM reservation WHERE id = ?");
    $stmt->bind_param("i", $id);

    return $stmt->execute();
}

?>

