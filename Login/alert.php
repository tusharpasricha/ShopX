
    <script src="../sweetalert.js"></script>
    <?php
    //session_start();
    if (isset($_SESSION['status']) && ($_SESSION['status'] != '')) {

    ?>
        <script>
            swal({
                title: "<?php echo $_SESSION['status']; ?>",
                //text: "You clicked the button!",
                icon: "<?php echo $_SESSION['status_code']; ?>",
                button: "OK",
                timer: 2500,
            });
        </script>
    <?php
        unset($_SESSION['status']);
    }
    ?>