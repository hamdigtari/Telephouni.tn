 <div class="row">
                    <div class="col-sm-3">
                        <div class="swiper-slide swiper-slide-active" style="width: 285px;">
                            <div class="product-shortcode style-9">
                                <div class="preview">
                                     <?php if(empty($user->image)): ?>
                        <img src="img/manAVATAR2.jpg" alt="">
                        <?php else: ?>
                          <img src="<?= URLROOT.'/images/'.$user->image ?>" alt="">
                        <?php endif; ?>
                                    
                                </div>
                                <div class="content">
                                    <div class="title">
                                        <div class="simple-article size-1 uppercase color col-xs-b5">@<?php echo($user->username); ?></div>
                                        <div class="h6"><?php echo($user->name); echo($user->surname); ?></div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">---------------</br> member since : <?php echo(ClientsC::cTime($user->created_at)); ?></div>
                                    </div>
                                    <div class="follow light">
                                        
                                        
                                        
                                        <a class="entry" href="<?php echo(URLROOT); ?>/edit_profile.php"><i class="fa "><div class="h5">Edit</div>
</i></a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="empty-space col-xs-b20"></div>
                    </div>