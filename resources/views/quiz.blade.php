<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Soal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    background-color: #5846f9;
}
.container{
    background-color: #fff;
    color: #000;
    border-radius: 10px;
    padding: 20px;
    font-family: 'Montserrat', sans-serif;
    max-width: 700px;
}
.container > p{
    font-size: 32px;
}
.question{
    width: 75%;
}
.options{
    position: relative;
    padding-left: 40px;
}
#options label{
    display: block;
    margin-bottom: 15px;
    font-size: 14px;
    cursor: pointer;
}
.options input{
    opacity: 0;
}
.checkmark {
    position: absolute;
    top: -1px;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #555;
    border: 1px solid #ddd;
    border-radius: 50%;
}
.options input:checked ~ .checkmark:after {
    display: block;
}
.options .checkmark:after{
    content: "";
	width: 10px;
    height: 10px;
    display: block;
	background: white;
    position: absolute;
    top: 50%;
	left: 50%;
    border-radius: 50%;
    transform: translate(-50%,-50%) scale(0);
    transition: 300ms ease-in-out 0s;
}
.options input[type="radio"]:checked ~ .checkmark{
    background: #21bf73;
    transition: 300ms ease-in-out 0s;
}
.options input[type="radio"]:checked ~ .checkmark:after{
    transform: translate(-50%,-50%) scale(1);
}
.btn-primary{
    background-color: #555;
    color: #ddd;
    border: 1px solid #ddd;
}
.btn-primary:hover{
    background-color: #5846f9;
    border: 1px solid #5846f9;
}
.btn-success{
    padding: 5px 25px;
    background-color: #5846f9;
}
@media(max-width:576px){
    .question{
        width: 100%;
        word-spacing: 2px;
    } 
}
    </style>
</head>

<body>
    <form action="{{ route('checkJawaban') }}" method="POST">
        @csrf
        <?php $number = 1;?>
        @foreach ($quiz as $item)
       
            <div class="row">
                
                <div class="container mt-3">
                    <div class="question ml-sm-3 pl-sm-5 pt-2">
                        
                        <div class="py-2 h5"><b>Soal Nomor <?php echo $number;?></b></div>
                
                        <div class="py-2 h5"><b>{{$item->soal}}</b></div>
                        <div class="pl-md-0 pt-sm-0 pt-3" id="options">
                            <label class="options">{{$item->choice_a}}
                                <input type="radio" value="a" name="radio<?php echo $number;?>">
                                <span class="checkmark"></span>
                            </label>
                            <label class="options">{{$item->choice_b}}
                                <input type="radio" value="b"name="radio<?php echo $number;?>">
                                <span class="checkmark"></span>
                            </label>
                            <label class="options">{{$item->choice_c}}
                                <input type="radio" value="c" name="radio<?php echo $number;?>">
                                <span class="checkmark"></span>
                            </label>
                            <label class="options">{{$item->choice_d}}
                                <input type="radio" value="d" name="radio<?php echo $number;?>">
                                <span class="checkmark"></span>
                            </label>
                            <label class="options">{{$item->choice_e}}
                                <input type="radio" value="e" name="radio<?php echo $number;?>">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        
                    </div>
                </div>
            </div>
            <?php $number++;?>
        @endforeach
        <div class="container mt-3 text-right">
            <div class="ml-auto mr-sm-5">
                <button class="btn btn-success">Submit</button>
            </div>
        </div>
        
        
    </form>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>