@extends('layout')

@section('content') 

@if($classes==0)
    <form method="get" action="./">
        <div class="form-group row">
            <label for="inputEmail" class="col-lg-2 control-label">Number of classes</label>
            <input type="text" class="form-control bfh-number" value="8" name="classes">
            <br/>
            <label for="inputEmail" class="col-lg-2 control-label">Type</label>
            <label class="radio-inline">
                <input type="radio" name="weighted" value="yes" checked>Weighted
            </label>
            <label class="radio-inline">
                <input type="radio" name="weighted" value="no">Unweighted
            </label>
            <br/>
            <br/>
            <input type="submit" class="btn btn-primary">
        </div>
    </form>

@elseif($classes>32)
    <p>You cannot enter more than 32 classes. 
        
@else
    <form>
        <div class="row">
            <div class="col-lg-6">
                <h4>Grade</h4>
            </div>
            <div class="col-lg-6">
                <h4>Weight</h4>
            </div>
        </div>
        @for($i=0; $i<$classes; $i++) 
        <div class="row">
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-btn">
                                <select class="form-control" id="grade" onchange="calculate();">
                                    <option>A+(97-100)</option>
                                    <option>A(93-96)</option>
                                    <option>A-(90-92)</option>
                                    <option>B+(87-89)</option>
                                    <option>B(83-86)</option>
                                    <option>B-(80-82)</option>
                                    <option>C+(77-79)</option>
                                    <option>C(73-76)</option>
                                    <option>C-(70-72)</option>
                                    <option>E/F(&lt;70)</option>
                                </select>
                                <br />
                            </span>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-btn">
                                @if($weighted=="no")
                                    <select class="form-control" id="select" disabled>
                                @else
                                        <select class="form-control" id="weight" onchange="calculate();">
                                @endif
                                        <option>AP</option>
                                        <option>Seminar</option>
                                        <option selected>Honors</option>
                                        <option>Academic/Basic</option>
                                        @if($weighted=="no")
                                            <option selected>Unweighted</option>
                                        @endif
                                    </select>
                                <br/>
                            </span>
                </div>
            </div>
            </div>
            <br/>
        @endfor
        
            <h5>Your GPA: <b id="gpa"></b></h5>
    </form>
    <script>
        $(document).ready(function () {
            calculate();
        });


        function calculate() {
            var grades = new Array({{$classes}});
            var weight = 0, grade = 0, avg = 0, total = 0;
            $('select').each(function (key, value) {

                if (this.id == "weight") {
                    if (typeof grades[grade] === 'undefined') grades[grade] = 0;
                    if (this.value == "AP") grades[grade] = 1.7;
                    if (this.value == "Seminar") grades[grade] = 1.2;
                    if (this.value == "Honors") grades[grade] = 0.7;
                    if (this.value == "Basic/Academic") grades[grade] = 0.2;
                    if (this.value == "Unweighted") grades[grade] = 0;
                }

                if (this.id == "grade") {
                    if (typeof grades[grade] === 'undefined') grades[grade] = 0;
                    if (this.value == "A+(97-100)") grades[grade] += 4;
                    if (this.value == "A(93-96)") grades[grade] += 3.8;
                    if (this.value == "A-(90-92)") grades[grade] += 3.6;

                    if (this.value == "B+(87-89)") grades[grade] += 3;
                    if (this.value == "B(83-86)") grades[grade] += 2.8;
                    if (this.value == "B-(80-82)") grades[grade] += 2.6;

                    if (this.value == "C+(77-79)") grades[grade] += 2;
                    if (this.value == "C(73-76)") grades[grade] += 1.8;
                    if (this.value == "C-(70-72)") grades[grade] += 1.6;

                    if (this.value == "E/F(&lt;70)") grades[grade] = 0;

                    grade++;
                }



            });
            for (var i = 0; i < grades.length; i++) {
                total += grades[i];
            }
            avg = total / {{$classes}};
            roundedAvg = (total / {{$classes}}).toFixed(2);
            if(avg==roundedAvg) 
                $("#gpa").html(roundedAvg);   
            else 
                $("#gpa").html(roundedAvg + " (" + avg + ")");
                
        }
    </script>

    @endif 
@stop
