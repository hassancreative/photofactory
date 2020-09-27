<style>
    .exit-popup .modal{
        z-index: 999999;
    }
    .__wait-popup .modal-content {
    border-radius: 0;
    padding: 15px 20px 40px;
    border: 3px solid #373737;
    background: url(images/exit-popup-bg.jpg) no-repeat;
    background-size: cover;
}
.__wait-popup .modal-content .modal-header {
    border: 0;
    padding: 0;
}
.__wait-popup .modal-content .modal-header .close {
    padding: 0;
}
.__wait-popup .modal-content .modal-body .__wait-img {
    background: url(https://cdn1.myassignmenthelp.com/new-images/exit-popup-sprite.png) no-repeat;
    width: 92px;
    height: 90px;
}
.__wait-popup .modal-content .modal-body h2 {
    font-size: 36px;
    font-weight: 700;
    color: #dd6e02;
    text-transform: uppercase;
}
.__wait-popup .modal-content .modal-body h3 {
    font-weight: 700;
    font-size: 22px;
    margin-bottom: 15px;
    color:#373737;
}


.__wait-popup .modal-content .modal-body .__popup-elements-sprite.\--popup-element {
    background-position: -103px 1px;
}


.__wait-popup .modal-content .modal-body .__popup-elements-sprite {
    background: url(images/exit-popup-sprite.png);
    width: 30px;
    height: 40px;
}
.__wait-popup .modal-content .modal-body h4 {
    font-size: 16px;
    font-weight: 700;
    margin: 0;
    color:#373737;
}

.__wait-popup .modal-content .modal-body p {
    font-size: 13px;
    color:#373737;
    margin-bottom: 1rem;
}

.__wait-popup .modal-content .modal-body .__popup-elements-sprite.\--popup-element {
    background-position: -103px 1px;
}
.__wait-popup .modal-content .modal-body .__popup-elements-sprite.\--popup-element-1 {
    background-position: -105px -42px;
}
.__wait-popup .modal-content .modal-body .__popup-elements-sprite-1.\--popup-element-2 {
    width: 35px;
    height: 35px;
    background-position: -405px 1px;
}
.__wait-popup .modal-content .modal-body .__popup-elements-sprite-1 {
    background: url(images/page-elements.png);
    background-size: 600px 180px;
}

.__wait-popup .modal-content .modal-body .__assistance-btn {
    background-color: #256d0f;
    display: inline-block;
    color: #fff;
    padding: 8px 30px;
    border: none;
    box-shadow: 2px 2px 2px #9a9a9a;
    cursor: pointer;
    margin: 0 auto;
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    text-decoration: none;
    font-size: 16px;
    text-transform: capitalize;
    border-radius: 2px;
    text-align: center;
    text-transform: uppercase;
}

</style>
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exit-modal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="exit-popup __wait-popup">
    <div class="modal fade" id="exit-modal" tabindex="-1" role="dialog" aria-labelledby="exit-modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
          
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <div class="row">
                          <div class="col-lg-3 col-md-12 col-12">
                              <div class="__wait-img m-auto"></div>
                          </div>
                          <div class="col-lg-9 col-md-12 col-12 text-center text-lg-left">
                              <h2>Wait!</h2>
                              <h3>GET A DISCOUNTED QUOTE</h3>
                              <div class="row">
                                  <div class="col-lg-2 col-md-12 xol-12">
                                      <div class="__popup-elements-sprite --popup-element m-auto"></div>
                                  </div>
                                  <div class="col-lg-10 co-md-12 col-12">
                                      <h4>
                                          205+ QUALIFIED EXPERTS</h4>
                                      <p>ONLINE TO HELP YOU 24X7</p>
                                  </div>

                                  <div class="col-lg-2 col-md-12 xol-12">
                                      <div class="__popup-elements-sprite --popup-element-1 m-auto"></div>
                                  </div>
                                  <div class="col-lg-10 co-md-12 col-12">
                                      <h4>
                                          GUARANTEED GRADE</h4>
                                      <p>OR GET MONEY BACK!</p>
                                  </div>
                                  <div class="col-lg-2 col-md-12 xol-12">
                                      <div class="__popup-elements-sprite-1 --popup-element-2 m-auto"></div>
                                  </div>
                                  <div class="col-lg-10 co-md-12 col-12">
                                      <h4>RATED 4.9/5</h4>
                                      <p>OUT OF 550 REVIEWS</p>
                                  </div>
                                  <div class="col-lg-12 col-12">
                                      <button onclick="javascript:void(Tawk_API.toggle())" type="button" class="__assistance-btn mt-2">Get A Discounted Quote</button>
                                  </div>
                              </div>
                          </div>
                      </div>
        </div> 
        </div>
    </div>
    </div>
</div>