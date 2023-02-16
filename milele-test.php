<html>
<head>
  <title>Milele Filters Test</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="main.js"></script>
</head>
<body>
  <header><img src="MileleLogowhite.png"></header>
  <div class="container">
    <div class="header">
      <span class="indicator active"></span>
      <span class="indicator"></span>
      <div class="content">
        <div class="content__box visible__no-animation step-1">
          <div class="title">
            <h5>Step 1</h5>
          </div>
          <div class="body1">
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Supplier</span>
                <select name="supplier">
                  <option value="">Select</option>
                  <option>Supplier One</option>
                  <option>Supplier Two</option>
                  <option>Supplier Three</option>
                </select>
              </div>
              <div class="input-group sub" style="display:none;">
                <span class="input-group-addon" id="basic-addon1">Whole Seller</span>
                <select name="whole_seller">
                  <option value="">Select</option>
                  <option>Whole Seller One</option>
                  <option>Whole Seller Two</option>
                  <option>Whole Seller Three</option>
                </select>
              </div>
              <div class="input-group sub-sub" style="display:none;">
                <span class="input-group-addon" id="basic-addon1">Steering Type</span>
                <select name="steering_type">
                  <option value="">Select</option>
                  <option>Left Hand Driven (LHD)</option>
                  <option>Right Hand Driven (RHD)</option>
                </select>
              </div>
              <div>
                <button type="submit" id="button-1" class="submit-button btn btn-primary">Next</button>
              </div>
            </div>
          </div>
        </div>
        <div class="content__box step-2">
          <div class="title">
            <h5>Step 2</h5>
          </div>
          <div class="body2">
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Model</span>
                <select name="model">
                  <option value="">Select</option>
                  <option>Model One</option>
                  <option>Model One</option>
                  <option>Model Two</option>
                </select>
              </div>
              <div class="input-group sub1" style="display:none;">
                <span class="input-group-addon" id="basic-addon1">SFX</span>
                <select name="sfx">
                  <option value="">Select</option>
                  <option>A1</option>
                  <option>B1</option>
                  <option>A1</option>
                </select>
              </div>
              <div class="input-group sub1-sub" style="display:none;">
                <span class="input-group-addon" id="basic-addon1">Variant</span>
                <select name="variant">
                  <option value="">Select</option>
                  <option>SomeCar_1</option>
                  <option>SomeCar_2</option>
                  <option>SomeCar_1</option>
                </select>
              </div>
              <div class="input-group sub1-sub-sub" style="display:none;">
                <span class="input-group-addon" id="basic-addon1">Color</span>
                <select name="color">
                  <option value="">Select</option>
                  <option>Black</option>
                  <option>White</option>
                  <option>Blue</option>
                </select>
              </div>
              <div>
                <button type="submit" id="button-2" class="submit-button btn btn-primary">Next</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>