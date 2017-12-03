public function updateUserAdmin($userId){
        if(isset($_SESSION)){
            if(getUserType($_SESSION['userType']) == 'admin'){
                setUserId($_POST['userId']);
                setUsername($_POST['username']);
                setPassword($_POST['password']);
                setUserType($_POST['userType']);
                setGender($_POST['gender']);
                setEmail($_POST['email']);
                setMobileNumber($_POST['mobileNumber']);
                setAddress($_POST['address']);
                setUpdatedBy($_SESSION['userId']);
                setImage($_POST['image']);
                setUpdatedBy($_SESSION['userId']);
                $update1 = "UPDATE customer
                SET
                    firstName = '".getUserId()."',
                    middleName = '".getMiddleName()."',
                    lastName = '".getLastName()."',
                    birthdate = '".getBirthdate()."'
                WHERE userId = '".getUserId()."'";	
                $result1 = mysqli_query($mysqli, $update);
            }else{
                echo "no privileges to update user";
            }
        }else{
            echo "no session"
        }
    }