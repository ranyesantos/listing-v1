<?php 
session_start();
if(isset($_SESSION['msg'])){ ?>
    <div class="center-align">
        <script>
            window.onload = function() {
                M.toast({html: '<?php echo $_SESSION['msg']; ?>', classes: 'rounded'});
            }
        </script>
    </div>
<?php
}
session_unset();