
<!DOCTYPE html>
<html>

@includeif('Painel.Layout.head')


<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@includeif('Painel.Layout.Header')

@includeif('Painel.Layout.sideBarLateral')

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">  <!-- col -->
                
                @yield('content')
                @yield('viewUsuario')
            

          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
   
    </section>

   

  </div>

  @include('Painel.layout.footer')

 
 
</div>
<!-- ./wrapper -->
@includeif('Painel.Layout.javascript')
</body>
</html>
