<?php
 
/*
    API for Authentication
    
    usage: 
        require_once 'auth.php';    // Setup auth code
        user_info();                // Show the login info
        handle_auth_actions();      // Run the Auth Controller 
        
        Actions:
        
        GET - signup, login, logout
        POST - register, validate
        
*/

    require_once 'log.php';
    require_once 'db.php';
    session_start ();


    // Check to see that the password in OK
    function is_valid_login ($email, $password) {
        global $db;
        
        $query = 'SELECT password FROM administrators WHERE email=:email';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();
        $hash = $row['password'];
        log_event("User login check: $email, $hash");
        return password_verify($password, $hash);
        
    }


    // Check to see if user is already authenticated
    function logged_in () {
        log_event("logged_in: isset=" . isset($_SESSION['USER']));
        if (isset($_SESSION['USER'])) {
            log_event("logged_in: logged_in=" . $_SESSION['USER']);
        }
        return (isset($_SESSION['USER']) and ! empty($_SESSION['USER'])) ;
    }


    // Cancel the login
    function logout ($page) {
        unset($_SESSION['USER']);
        header("Location: $page");
    }


    // Set the password into the administrator table
    function register_user() {
        global $db;
        
        $email    = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $first    = filter_input(INPUT_POST, 'first');
        $last     = filter_input(INPUT_POST, 'last');
        
        log_event("$email, $first, $last");
        $hash = password_hash($password, PASSWORD_DEFAULT);
        
        $query = 'INSERT INTO administrators (email, password, firstName, lastName) 
            VALUES (:email, :password, :first, :last);';
        
        $statement = $db->prepare($query);
        
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $hash);
        $statement->bindValue(':first', $first);
        $statement->bindValue(':last', $last);
        
        $statement->execute();
        $statement->closeCursor();
    }


    // Show the login
    function login_form($page) {
        log_event("Show Login Form");
        $settings = array('next' => $page);
        return render_template('login.html', $settings);
        
//        return '
//            <div class="card">
//                <h3>Login</h3>
//            
//                <form action="' . $page . '" method="post">
//                    <p><label>Email:</label> &nbsp; <input type="text" name="email"></p>
//                    <p><label>Password:</label> &nbsp; <input type="password" name="password"></p>
//                    <p><input type="submit" value="Login" class="btn"></p>
//                    <input type="hidden" name="action" value="validate">
//                    <input type="hidden" name="next" value="' . $page . '">
//                </form>
//            </div>
//            ';
    }


    // Do a login if needed
    function require_login ($page){
        if (! logged_in ()) {
            header("Location: $page?action=login");
        }
    }


    // Show the sign up
    function sign_up_form($page) {
        log_event("Show Sign Up Form");
        $settings = array('next' => $page);
        return render_template('sign_up.html', $settings);
        
//        return '
//            <div class="card">
//                <h3>Sign Up</h3>
//            
//                <form action="' . $page . '" method="post">
//                    <p><label>Email:</label> &nbsp; <input type="text" name="email"></p>
//                    <p><label>Password:</label> &nbsp; <input type="password" name="password"></p>
//                    <p><label>First Name:</label> &nbsp; <input type="text" name="first"></p>
//                    <p><label>Last Name:</label> &nbsp; <input type="text" name="last"></p>
//                    <p><input type="submit" value="Sign Up" class="btn"/></p>
//                    <input type="hidden" name="action" value="register">
//                    <input type="hidden" name="next" value="' . $page . '">
//                    
//                </form>
//            </div>
//            ';
    }


    // Show the logged in user
    function user_info() {
        if (logged_in ()) {
            return '<div class="user">' . 
                "Logged in as $_SESSION[USER]" . 
                render_button('Logout', 'private.php?action=logout') .
                '</div>';
        }
        else {
            return '<div class="user">' . 
                render_button('Login', 'private.php?action=login') .
                render_button('Sign Up', 'private.php?action=signup') .
                '</div>';
        }
    }

    
    // Test if password is valid or not
    function validate () {
        global $db;
        
        $email    = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        log_event("Validate: $email, $password");
        if (is_valid_login ($email, $password)) {
            $_SESSION['USER'] = $email;
        }
    }


    /* ---------------------------
         C O N T R O L L E R
     --------------------------- */

//    // Handle all action verbs
//    function handle_note_actions() {
//
//        // POST
//        $action = filter_input(INPUT_POST, 'action');
//        if ($action == 'create') {
//            if (add_note()) {
//                header('Location: index.php');
//            }
//        }
//        if ($action == 'update') {
//            if (update_note()) {
//                header('Location: index.php');
//            }
//        }
//
//        // GET
//        $action = filter_input(INPUT_GET, 'action');
//        if (empty($action)) {
//            $list = list_notes();
//            return note_list_view($list);
//        }
//        if ($action == 'delete') {
//            delete_note();
//            header('Location: index.php');
//        }
//        if ($action == 'add') {
//            return add_note_view();
//        }
//        if ($action == 'edit') {
//            $id = filter_input(INPUT_GET, 'id');
//            if (! empty($id)) {
//                return edit_note_view(get_note($id));
//            }
////            header('Location: index.php');
//        }
//    }


    // Controller for user authentication
    function handle_auth_actions() {        
        // POST
        $action = filter_input(INPUT_POST, 'action');
        if ($action == 'register') {
            return register_user();
        }
        if ($action == 'validate') {
            return validate();
        }

        // GET
        $action = filter_input(INPUT_GET, 'action');
        if ($action == 'signup') {
            return sign_up_form();
        }
        if ($action == 'login') {
            return login_form('private.php');
        }
        if ($action == 'logout') {
            return logout('private.php?action=login');
        }
    }
  
?>
