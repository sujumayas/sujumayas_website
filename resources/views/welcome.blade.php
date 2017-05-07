<!doctype html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sujumayas</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    
    <!-- Styles -->
    <style>
      html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
      }

      .full-height {
        height: 100vh;
      }

      .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
      }

      .position-ref {
        position: relative;
      }

      .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
      }

      .content {
        text-align: center;
      }

      .title {
        font-size: 84px;
      }

      .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
      }

      .m-b-md {
        margin-bottom: 30px;
      }
      .page__demo-preview {
        display: block;
        position: absolute;
        width:100%;
        top: 0;
        left:0;
        z-index:1;
      }
      .page__demo-preview img {
        width:100%;
        filter: blur(10px);
      }
      h1{
        z-index:9999;
      }
      .title,
      .alerts{
        background-color:white;
      }
      .allContentHereToFixZindex{
        position: relative;
        z-index:999;
      }
      @media (max-width: 600px) {
        .title {
          font-size:40px;
        } 
        hr, 
        .alerts,
        .fileUpload {
          max-width: 80%;
          margin:10px auto;
        }
        .buttons {
          margin: 10px 0;
        }
      }
      

    </style>
  </head>
  <body>
    <div class="flex-center position-ref full-height">
      @if (Route::has('login'))
        <div class="top-right links">
          @if (Auth::check())
            <a href="{{ url('/home') }}">Home</a>
          @else
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
          @endif
        </div>
      @endif

      <div class="content" id="app">
        {{-- Background Image --}}
        <div class="page__demo-preview" v-if="file11PreviewImage.length > 0">
          <img alt="file11PreviewName" class="page__demo-preview-image" :src="file11PreviewImage">
        </div>
        {{-- End of Background Image --}}
        <div class="allContentHereToFixZindex">
          {{-- Title --}}
          <div class="title m-b-md">
            Sujumayas
          </div>
          {{-- End of Title --}}
          {{-- <example></example> --}}
          <div id="alerts">
            <ui-alert @dismiss="showAlert1 = false" type="error" v-show="showAlert1">
              Oh My God! Becarefull with this stuff!
            </ui-alert>
          </div>
          {{-- Main Content --}}
          <hr>
          <div class="buttons">
            {{-- <ui-autocomplete></ui-autocomplete> --}}
            <ui-button ref="sayhi" @click="openModal('myModal')">Say Hi</ui-button>
            <ui-button ref="warning" @click="showAlert1=!showAlert1">Activate Warning!</ui-button>
            {{-- <ui-calendar></ui-calendar> --}}
            {{-- <ui-checkbox></ui-checkbox> --}}
            {{-- <ui-checkbox-group></ui-checkbox-group> --}}
            {{-- <ui-collapsible></ui-collapsible> --}}
            {{-- <ui-confirm></ui-confirm> --}}
            {{-- <ui-datepicker></ui-datepicker> --}}
            {{-- <ui-fab></ui-fab> --}}
            {{-- <ui-fileupload></ui-fileupload> --}}
            {{-- <ui-icon></ui-icon> --}}
            {{-- <ui-icon-button></ui-icon-button> --}}
            {{-- <ui-menu></ui-menu> --}}
            {{-- <ui-popover></ui-popover> --}}
            {{-- <ui-preloader></ui-preloader> --}}
            {{-- <ui-progress-circular></ui-progress-circular> --}}
            {{-- <ui-progress-linear></ui-progress-linear> --}}
            {{-- <ui-radio></ui-radio> --}}
            {{-- <ui-radio-group></ui-radio-group> --}}
            {{-- <ui-ripple-ink></ui-ripple-ink> --}}
            {{-- <ui-select></ui-select> --}}
            {{-- <ui-slider name="Slider" :value="1"></ui-slider> --}}
            {{-- <ui-snackbar></ui-snackbar> --}}
            {{-- <ui-snackbar-container></ui-snackbar-container> --}}
            {{-- <ui-switch></ui-switch> --}}
            {{-- <ui-tab></ui-tab> --}}
            {{-- <ui-tabs></ui-tabs> --}}
            {{-- <ui-textbox></ui-textbox> --}}
            {{-- <ui-toolbar></ui-toolbar> --}}
            {{-- <ui-tooltip></ui-tooltip> --}}
          </div>
          {{-- File Upload --}}
          <div class="fileUpload">
            <br>
            <br>
            <ui-fileupload accept="image/*" name="file11" @change="onFile11Change">
              Upload a momentary Background Image
            </ui-fileupload>
          </div>
          <hr>
          <ui-modal ref="myModal" title="Greeting Modal">Hello there!</ui-modal>
        </div>
      </div>
    </div>
    <!-- critical JS -->
    <script src="/js/app.js"></script>
  </body>
</html>
