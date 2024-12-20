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



?>