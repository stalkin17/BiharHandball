@extends('frontend.pages.includes.layout')
@section('title', 'Gallery')
@section('container')
<!----------------- Image Gallery Ends here ---------------------------------------->
<div id="gallery" >
  <div class="container-fluid text-white bg-danger text-center " ><h3>Image Gallery</h3></div>
          <div class="gallery-block compact-gallery">  
                  <div class="row no-gutters">
                      <div class="  col-xs-6  col-sm-4 col-md-3 col-lg-2 item zoom-on-hover">
                          <a class="lightbox" href="images/gallery/image1.jpg">
                              <img class="img-fluid image" src="images/gallery/image1.jpg">
                              <span class="description">
                                  <span class="description-heading">Lorem Ipsum-1</span>
                                  <div class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                              </span>
                          </a>
                      </div>

                      <div class="  col-xs-6  col-sm-4 col-md-3 col-lg-2 item zoom-on-hover">
                          <a class="lightbox" href="images/gallery/image2.jpg">
                              <img class="img-fluid image" src="images/gallery/image2.jpg">
                              <span class="description">
                                  <span class="description-heading">Lorem Ipsum-2</span>
                                  <div class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                              </span>
                          </a>
                      </div>

                      <div class=" col-xs-6  col-sm-4 col-md-3 col-lg-2 item zoom-on-hover">
                          <a class="lightbox" href="images/gallery/image3.jpg">
                              <img class="img-fluid image" src="images/gallery/image3.jpg">
                              <span class="description">
                                  <span class="description-heading">Lorem Ipsum-3</span>
                                  <div class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                              </span>
                          </a>
                      </div>

                      <div class=" col-xs-6  col-sm-4 col-md-3 col-lg-2 item zoom-on-hover">
                          <a class="lightbox" href="images/gallery/image4.jpg">
                              <img class="img-fluid image" src="images/gallery/image4.jpg">
                              <span class="description">
                                  <span class="description-heading">Lorem Ipsum-4</span>
                                  <div class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                              </span>
                              </a>
                          </div>

                      <div class=" col-xs-6  col-sm-4 col-md-3 col-lg-2 item zoom-on-hover">
                          <a class="lightbox" href="images/gallery/image5.jpg">
                              <img class="img-fluid image" src="images/gallery/image5.jpg">
                              <span class="description">
                                  <span class="description-heading">Lorem Ipsum-5</span>
                                  <div class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                              </span>
                          </a>
                      </div>

                      <div class=" col-xs-6  col-sm-4 col-md-3 col-lg-2 item zoom-on-hover">
                          <a class="lightbox" href="images/gallery/image6.jpg">
                              <img class="img-fluid image" src="images/gallery/image6.jpg">
                              <span class="description">
                                  <span class="description-heading">Lorem Ipsum-6</span>
                                  <div class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                              </span>
                          </a>
                      </div>

                      <div class=" col-xs-6  col-sm-4 col-md-3 col-lg-2 item zoom-on-hover">
                          <a class="lightbox" href="images/gallery/image7.jpg">
                              <img class="img-fluid image" src="images/gallery/image7.jpg">
                              <span class="description">
                                  <span class="description-heading">Lorem Ipsum-7</span>
                                  <div class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                              </span>
                          </a>
                      </div>

                      <div class=" col-xs-6  col-sm-4 col-md-3 col-lg-2 item zoom-on-hover">
                          <a class="lightbox" href="images/gallery/image8.jpg">
                              <img class="img-fluid image" src="images/gallery/image8.jpg">
                              <span class="description">
                                  <span class="description-heading">Lorem Ipsum-8</span>
                                  <div class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                              </span>
                          </a>
                      </div>

                      <div class=" col-xs-6  col-sm-4 col-md-3 col-lg-2 item zoom-on-hover">
                          <a class="lightbox" href="images/gallery/image9.jpg">
                              <img class="img-fluid image" src="images/gallery/image9.jpg">
                              <span class="description">
                                  <span class="description-heading">Lorem Ipsum-9</span>
                                  <div class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                              </span>
                          </a>
                      </div>

                      <div class=" col-xs-6  col-sm-4 col-md-3 col-lg-2 item zoom-on-hover">
                          <a class="lightbox" href="images/gallery/image9.jpg">
                              <img class="img-fluid image" src="images/gallery/image9.jpg">
                              <span class="description">
                                  <span class="description-heading">Lorem Ipsum-10</span>
                                  <div class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                              </span>
                          </a>
                      </div>

                      <div class=" col-xs-6  col-sm-4 col-md-3 col-lg-2 item zoom-on-hover">
                          <a class="lightbox" href="images/gallery/image9.jpg">
                              <img class="img-fluid image" src="images/gallery/image9.jpg">
                              <span class="description">
                                  <span class="description-heading">Lorem Ipsum-11</span>
                                  <div class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                              </span>
                          </a>
                      </div>

                      <div class=" col-xs-6  col-sm-4 col-md-3 col-lg-2 item zoom-on-hover">
                          <a class="lightbox" href="images/gallery/image9.jpg">
                              <img class="img-fluid image" src="images/gallery/image9.jpg">
                              <span class="description">
                                  <span class="description-heading">Lorem Ipsum-12</span>
                                  <div class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                              </span>
                          </a>
                      </div>
                  </div>
          </div>
<script>baguetteBox.run('.compact-gallery', { animation: 'slideIn'});  </script>
</div>
<!------------------------ Image Gallery Ends here -------------------------------------------------->
@endsection