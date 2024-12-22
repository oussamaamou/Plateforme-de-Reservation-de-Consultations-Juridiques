<?php 

// Fonction d'Inscription
function addAccount($nom, $prenom, $role, $telephone, $email, $password) {
    global $conn;
    $password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO utilisateur (Nom, Prenom, Role, Telephone, Email, Mot_de_passe) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisss", $nom, $prenom, $role, $telephone, $email, $password);
    return $stmt->execute();
}


// Fonction de Connexion
function loginAccount($email, $password){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM utilisateur WHERE Email = ?");
    $stmt->bind_param("s", $email);
    
    if($stmt->execute()){
        $result = $stmt->get_result();
        
        if($result->num_rows == 1){
            $user = $result->fetch_assoc();
            $tkemail = $user['Email'];
            $tkpassword = $user['Mot_de_passe'];
            $role = $user['Role'];
            $Nom = $user['Nom'];
            $ID = $user['ID'];

            if($email === $tkemail && password_verify($password, $tkpassword)){
                $_SESSION['ID'] = $ID;
                $_SESSION['Nom'] = $Nom;

                if($role === 'Client'){
                    header("Location: ../php/client_dashboard.php");
                    exit();
                }
                if($role === 'Avocat'){
                    header("Location: ../php/avocat_dashboard.php");
                    exit();
                }
            } else {
                echo "Mot de passe incorrect.";
            }
        } else {
            echo "Email non trouvé.";
        }
    } else {
        echo "Erreur lors de l'exécution de la requête.";
    }

    $stmt->close();
}


// Fonction de Modification du Profile
function updateAccount($ID, $nom, $prenom, $telephone, $email, $password, $photo, $biographie) {
    global $conn;

    $params = [$nom, $prenom, $telephone, $email, $biographie];
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

    $sql = "UPDATE utilisateur SET Nom = ?, Prenom = ?, Telephone = ?, Email = ?, Biographie = ?" . $updatePassword . $updatePhoto . " WHERE ID = ?";

    $stmt = $conn->prepare($sql);

    $types = str_repeat('s', count($params) - 1);  
    $types .= 'i'; 

    $stmt->bind_param($types, ...$params);

    $result = $stmt->execute();
    $stmt->close();

    return $result;  
}


// Afficher le Profile Avocat
function getAvocatProfile($ID) {
    global $conn;
    $stmt = $conn->prepare("SELECT Nom, Prenom, Photo, Biographie, Telephone, Email, Mot_de_passe FROM utilisateur WHERE ID = ?");
    $stmt->bind_param("i", $ID);
    $stmt->execute();

    $stmt->bind_result($Nom, $Prenom, $Photo, $Biographie, $Telephone, $Email, $Mot_de_passe);

    if($stmt->fetch()){
        return [
            'Nom' => $Nom,
            'Prenom' => $Prenom,
            'Photo' => $Photo,
            'Biographie' => $Biographie,
            'Telephone' => $Telephone,
            'Email' => $Email,
            'Mot_de_passe' => $Mot_de_passe
        ];
    }
    else{
        return null;
    }
}

?>