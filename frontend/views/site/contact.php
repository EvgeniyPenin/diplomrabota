<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

$this->title = 'Contact';
?>
<section class="contact" id="CONTACT">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="contact_title  wow fadeInUp animated">
                        <h1>get in touch</h1>
                        <img src="images/shape.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna<br/> aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3  wow fadeInLeft animated">
                    <div class="single_contact_info">
                        <h2>Call Me</h2>
                        <p>+88 00 123 456 01</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Email Me</h2>
                        <p>Hello@abdullahnoman.com</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Address</h2>
                        <p>216 Street Address, Barisal, BD</p>
                    </div>
                </div>
                <div class="col-md-9  wow fadeInRight animated">
                    <form class="contact-form" action="">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="name" placeholder="Name">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">                                
                            </div>
                            <div class="col-md-6">
                                <textarea class="form-control" id="message" rows="25" cols="10" placeholder="  Message Texts..."></textarea>
                                <button type="button" class="btn btn-default submit-btn form_submit">SEND MESSAGE</button>                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work-with   wow fadeInUp animated">
                        <h3>looking forward to hearing from you!</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>