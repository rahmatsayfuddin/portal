                <div role="main" class="main">
    
                    <section class="page-header" style="margin-bottom:0px;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="breadcrumb">
                                        <li><a href="#">Beranda</a></li>
                                        <li class="active">Hubungi Kami</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
    
                    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                    <div id="googlemaps" class="google-map"></div>
    
                        <div class="container">
        
                            <div class="row">
                                <div class="col-md-6">
        
                                    <div class="alert alert-success hidden mt-lg" id="contactSuccess">
                                        <strong>Berhasil!</strong> Pesan Anda telah dikirim kepada kami.
                                    </div>
        
                                    <div class="alert alert-danger hidden mt-lg" id="contactError">
                                        <strong>Kesalahan!</strong> Terjadi kesalahan saat mengirim pesan Anda.
                                        <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
                                    </div>
        
                                    <h2 class="mb-sm mt-sm"><strong>Hubungi</strong> Kami</h2>
                                    <form id="contactForm" action="<?php echo base_url();?>Support/Save_data" method="POST">
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label>Nama anda *</label>
                                                    <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Alamat email anda *</label>
                                                    <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>Subyek</label>
                                                    <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>Pesan *</label>
                                                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="submit" value="Kirim Pesan" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                <br>
                                <h4 class="heading-primary" > <strong>Kantor</strong></h4>
                                <ul class="list list-icons list-icons-style-3 mt-xlg">
                                    <li>
                                        <i class="fa fa-map-marker" style="background-color: #DA2633 !important;"></i> <strong>Alamat:</strong> Graha Telkomsigma d/h German Centre <br>Jl. Kapt Subijanto Dj Bumi Serpong Damai,<br> Tangerang Indonesia 15321</li>
                                        <li><i class="fa fa-phone" style="background-color: #DA2633 !important;"></i> <strong>Telepon:</strong> 021 5315 3552
                                        </li>
                                    <li>
                                        <i class="fa fa-envelope" style="background-color: #DA2633 !important;"></i> <strong>Email:</strong> <a href="mailto:mail@example.com" style="color:DA2633">support@telkomcloud.id</a>
                                    </li>
                                </ul>
                                 
                            </div>
    
                        </div>
    
                    </div>
    
                </div>