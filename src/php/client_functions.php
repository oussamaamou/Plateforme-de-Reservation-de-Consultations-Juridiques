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

function getAllConsultations(){
    global $conn;
    $result = $conn->query("SELECT * FROM utilisateur WHERE Role = 'Avocat' ");
    return $result->fetch_all(MYSQLI_ASSOC);
}

?>

