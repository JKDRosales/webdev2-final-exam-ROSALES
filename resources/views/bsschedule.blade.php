<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bible Study Form Schedule</title>
    <script src="http://www.ourmanna.com/verses/api/js/&order=random" type="text/javascript"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-image: url("https://images.unsplash.com/photo-1469228252629-cbe7cb7db2c8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=966&q=80");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }     
        .centered-form{
            margin-top: 50px;
        }
        .centered-form .panel{
            background: rgba(255, 255, 255, 0.8);
            box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
        }
        #ourmanna-verse {
            padding-top: 10px;
            padding-left: 30px;
            padding-right: 30px;
            padding-bottom: 10px;
            margin:20px;
            background: rgba(0, 0, 0, 0.3);
            border-color: rgba(0, 0, 0, 0.3);
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            height: 100%;
            border: 1px solid;
            padding: 10px;
            box-shadow: 5px 10px 8px green;
        }
        #mannaverse {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #edf2f7;
        }
        #mannaverse-reference:before {
            content: "- ";
        }
        #mannaverse-reference {
            text-align: right;
            font-size: 14px;
            color: #edf2f7;
        }
        #mannaverse-version {
            color: white;
            font-size: 14px;
        }
    </style>
</head>
<body class="antialiased">
    @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    <div id="ourmanna-verse"> </div>    
    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-5 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                            <h3 class="panel-title text-center font-weight-bold">BIBLE STUDY REQUEST FORM </h3>
                                </div>
                                <div class="panel-body">                 
                                <form action="/bible-study-create-form" method="POST"> 
                                @csrf
                                <input type="hidden" value=" {{ $bst->id }} " name="id">
                                <div class="form-group">
                                    <label for="name" class="col-sm-6 control-label">Complete Name</label> 
                                    <input type="text" value=" {{ $bst->name }} " name="name"  class="form-control input-sm" >
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-6 control-label">Email Address</label> 
                                    <input type="text" value=" {{ $bst->email }} " name="email" value=" {{ $bst->email }} " class="form-control input-sm">
                                </div>
                                <div class="form-group">
                                    <label for="contact" class="col-sm-6 control-label">Phone Number</label> 
                                    <input type="number" value=" {{ $bst->contact }} " name="contact" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" class="form-control input-sm">
                                </div>
                                <div class="form-group">
                                    <label for="birthdate" class="col-sm-6 control-label ">Birthdate</label>                    
                                    <input type="date" value=" {{ $bst->birthdate }} " name="birthdate" class="form-control input-sm">                               
                                </div>
                                <div class="form-group">
                                    <label for="religion" class="col-sm-6 control-label">Religious Affiliation</label> 
                                    <input type="text" value=" {{ $bst->religion }} " name="religion" class="form-control input-sm">
                                </div>
                                <div class="form-group">
                                    <label for="study_date" class="col-sm-6 control-label">Bible Study Date</label>                    
                                    <input type="date" value=" {{ $bst->bsdate }} " name="bsdate" class="form-control input-sm">                               
                                </div>
                                <div class="form-group">
                                    <label for="bstime">Bible Study Time</label>
                                    <input type="time" value=" {{ $bst->bstime }} " name="bstime" >
                                </div>
                                <div class="form-group">
                                    <label for="bslocation" class="col-sm-6 control-label">Bible Study Address</label> 
                                    <input type="text" value=" {{ $bst->bslocation }} " name="bslocation" class="form-control input-sm">
                                </div>     
                                    <button type="submit" value="Submit and Save" class="btn btn-info btn-block">Submit</button>                                                              
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
    <script src="http://www.ourmanna.com/verses/api/js/?order=random" type="text/javascript"></script>
</html>
