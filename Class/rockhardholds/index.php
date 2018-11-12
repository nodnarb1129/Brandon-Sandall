
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta name="description" content="The Elegant Frontend Framework">
    <meta name="author" content="Adam Kochanowicz">

    <script src="../rockhardholds/rhhmain.js"></script>

    <link rel="stylesheet" href="../rockhardholds/rhhmain.css">
    <title>Kickstrap</title>
  </head>
  <body>
    <div id="sf-wrap">
      <nav role="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target=".navbar-ex1-collapse" class="navbar-toggle"><span class="sr-only">Toggle Navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="/" class="navbar-brand kickstrap-logo">Kickstrap</a>
          </div>
          <div class="navbar-collapse collapse navbar-ex1-collapse">
            <!-- Stripped-down header. Help users to focus on their purchase.-->
            <ul class="nav navbar-nav">
              <li><a href="/">Home</a></li>
              <li><a href="/docs.html">Docs</a></li>
              <li class="active"><a href="/products.html">Products</a></li>
              <li><a href="/newpage.html#disqus_thread">New Page</a></li>
            </ul>
            <ul class="navbar-right nav navbar-nav">
              <li><a href="/cart.html"> <span class="glyphicon glyphicon-shopping-cart">&nbsp;</span><span class="badge">3</span></a></li>
              <li><a href="/messages.html"> <span class="glyphicon glyphicon-envelope">&nbsp;</span><span class="badge">10</span></a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div ng-controller="ProductsCtrl" class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1>On Sale Now</h1>
            <p class="lead">Get them before they're gone</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="alert alert-info">
              <h4>Example page</h4>
              <p>This is an example page you can use to hack your own.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <article class="panel panel-default">
              <div class="panel-heading"> 
                <input type="text" ng-model="productInput" placeholder="Search products" class="form-control">
              </div>
              <div class="list-group ks-beforeload">
                <p class="list-group-item">Loading...</p>
              </div>
              <div class="list-group ks-afterload"><a ng-href="{{&quot;#&quot;}}{{slug(product.name)}}" ng-repeat="product in products | filter: productInput" ng-click="setSelectedProduct(product)" ng-class="{'active': selectedProduct.id == product.id }" class="list-group-item">{{product.name}}</a></div>
            </article>
          </div>
          <div class="col-sm-9 ks-afterload">
            <div id="featured" data-ride="carousel" class="carousel slide">
              <ol class="carousel-indicators">
                <li data-target="#featured" data-slide-to="0" class="active"></li>
                <li data-target="#featured" data-slide-to="{{$index+1}}" ng-repeat="featuredProduct in featuredProducts"></li>
              </ol>
              <div class="carousel-inner">
                <div style="max-height: 450px" class="item active"><img src="http://images.weserv.nl/?url=upload.wikimedia.org/wikipedia/commons/c/cc/Le_garcon_et_la_ville.JPG&amp;w=1000&amp;t=fitup">
                  <div class="carousel-caption">
                    <h3>Check out our summer deals</h3>
                  </div>
                </div>
                <div ng-repeat="featuredProduct in featuredProducts" style="max-height: 450px" class="item"><img src="http://images.weserv.nl/?url=upload.wikimedia.org/wikipedia/commons/{{featuredProduct.img}}&amp;w=1000&amp;t=fitup">
                  <div class="carousel-caption">
                    <h3>
                       
                      {{featuredProduct.name}}
                    </h3>
                    <p>{{featuredProduct.desc}}</p>
                    <p> <a href="cart.html" class="btn btn-default"> <span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a></p>
                  </div>
                </div>
              </div><a href="#featured" data-slide="prev" class="left carousel-control"><span class="glyphicon glyphicon-chevron-left"></span></a><a href="#featured" data-slide="next" class="right carousel-control"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div><br>
            <div class="row">
              <div ng-repeat="product in products | filter: productInput | limitTo: 3" class="col-sm-4"><img src="http://images.weserv.nl/?url=upload.wikimedia.org/wikipedia/commons/{{product.img}}&amp;h=400&amp;w=400&amp;t=square" style="width: 200px" class="img-circle center-block">
                <h4 ng-id="slug(product.name)" class="center-block">{{product.name}}</h4>
                <p>{{product.desc}}</p>
              </div>
            </div>
            <hr>
            <div id="ads" class="center-block"></div>
            <hr>
            <ul style="display: table" class="pagination center-block">
              <li ks-visible="currentPage != 0"><a href="" ng-click="deincrement()">&laquo;</a></li>
              <li ng-repeat="genericItem in genericItems | limitTo:numPages()" ng-click="setCurrentPage($index)" class="{{ currentPage == $index ? 'active': ''}}"><a href="">{{$index+1}}</a></li>
              <li ks-visible="currentPage &gt; (genericItems.length/pageSize - 1) == false"><a href="" ng-click="increment()">&raquo;	</a></li>
            </ul>
            <hr>
            <div class="row">
              <div ng-repeat="product in products | startFrom:startFrom() | limitTo:pageSize" style="min-height: 250px" class="col-md-4 col-sm-6">
                <div class="media"><img src="http://images.weserv.nl/?url=upload.wikimedia.org/wikipedia/commons/{{product.img}}&amp;h=128&amp;w=128&amp;t=square" style="width: 64px;" class="media-object pull-left">
                  <div class="media-body">
                    <h4 ng-id="slug(product.name)" class="media-heading">{{product.name}}</h4>
                    <p>{{product.desc}}</p>
                  </div>
                </div><a href="cart.html" class="btn btn-primary">Add to cart</a>
              </div>
            </div>
            <hr>
            <ul style="display: table" class="pagination center-block">
              <li ks-visible="currentPage != 0"><a href="" ng-click="deincrement()">&laquo;</a></li>
              <li ng-repeat="genericItem in genericItems | limitTo:numPages()" ng-click="setCurrentPage($index)" class="{{ currentPage == $index ? 'active': ''}}"><a href="">{{$index+1}}</a></li>
              <li ks-visible="currentPage &gt; (genericItems.length/pageSize - 1) == false"><a href="" ng-click="increment()">&raquo;	</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div id="sf-push"></div>
    </div>
    <section id="sf-footer" class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <ul class="nav navbar-nav">
          <li>
            <!-- Copyright: Edit this in app.coffee--><a href="#">&copy; Brandon Sandall</a>
          </li>
        </ul>
        <ul class="nav navbar-nav pull-right">
        </ul>
      </div>
    </section>
    <script src="//cdn.firebase.com/v0/firebase.js"></script>
    <script src="js/kickstrap.js"></script><script type="text/javascript">
(function() {
  k$.ready(function() {
    jspm["import"]('ks:advertisements');
    return k$.demoStylesheet = function() {
      return $('#main-stylesheet').remove();
    };
  });

}).call(this);
</script>
  </body>
</html>