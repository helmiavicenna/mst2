﻿<?php $this->load->helper('url');?>
<?php include "header_admin.php";?>
<?php include "admin_menu.php";?>
        <div class="grid_10">
            <div class="box round first">
                <h2>Notifications</h2>
                
                <div class="block">
            
                            <div class="message info">
                                <h5>Information</h5>
                                <?php
                                
								?>
                                <p>
                                   <?php print $output; ?>
                                </p>
                            </div>
                            <div class="message success">
                                <h5>Success!</h5>
                                <p>
                                    This is a success message.
                                </p>
                            </div>
                            <div class="message warning">
                                <h5>Warning!</h5>
                                <p>
                                    This is a warning message.
                                </p>
                            </div>
                            <div class="message error">
                                <h5>Error!</h5>
                                <p>
                                    This is an error message.
                                </p>
                            </div>
                        </div>
                
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
<?php include "footer_admin.php";?>   
