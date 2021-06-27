<? 
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        if( validate_form() ) {
            process_form();
        } else {
            
            show_form();
        }
    } else {
        show_form();
    }


    function process_form() {
        echo $_POST['my_name']. "님 안녕하세요.";
    }


    function show_form() {
        <<<HTML_FORM
           
            HTML_FORM;

    }
    

    function validate_form() {
        if( strlen( $_POST['my_name']) < 3 ) { 
            return false;
        } else {
            return true;
        }
    }


?>