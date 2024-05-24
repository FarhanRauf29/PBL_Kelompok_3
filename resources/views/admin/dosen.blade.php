<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            
            <div class="col-lg-12">
              <div class="block">
                <div class="title"><strong>Dosen</strong></div>
                <div class="block-body">
                  <form class="form-horizontal" action="{{url('add_dosen')}}" method="post">

                    @csrf

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Nama</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">NIP</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" name="nip">
                      </div>
                    </div>
                    
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Email</label>
                        <div class="col-sm-9">
                          <input type="email" placeholder="@Email" class="form-control" name="email">
                        </div>
                      </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Nomor Telefon</label>
                      <div class="col-sm-9 input-group">
                        <div class="input-group-prepend"><span class="input-group-text">+62</span></div>
                        <input type="number" class="form-control" name="no_telp">
                      </div>
                    </div>
                    
                    <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Jabatan</label>
                        <div class="col-sm-9">
                          <select name="jabatan" class="form-control mb-3 mb-3">
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                            <option>option 4</option>
                          </select>
                        </div>
                      </div>

                    <div class="line"></div>
                    <div class="form-group row">
                      <div class="col-sm-9 ml-auto">
                        <button type="cancel" class="btn btn-secondary">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
            

            

          </div>  
      </div>
    </div>

    <footer class="footer">
        <div class="footer__block block no-margin-bottom">
          <div class="container-fluid text-center">
            <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
             <p class="no-margin-bottom">2024 &copy; Bad company. <a target="_blank" href="https://templateshub.net">Kelompok 3</a>.</p>
          </div>
        </div>
      </footer>

    <!-- JavaScript files-->
    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('/admincss/js/front.js')}}"></script>
  </body>
</html>