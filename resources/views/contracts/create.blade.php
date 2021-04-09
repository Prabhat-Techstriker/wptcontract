@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Create Contract
        <div class="pull-right">
            <a class="btn btn-primary" href="{{url('contracts')}}"> Back</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="card-body property">
        <form action="{{ route("admin.contracts.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="unitowner">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="contract_type">Select Contract Type</label>
                        <select class="form-control" name="contract_type" id="contract_type" required>
                            <option value="1">Send By DocUSign</option>
                            <option value="2">Print Only</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="file">Project Type*</label>
                        <select class="form-control" id="projectType" name="projectType" required>
                            <option value="">Please Select Project</option>
                            @foreach($projects as $project)
                            <option value="{{ $project->id }}">{{ $project->project_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="file">Property Type*</label>
                        <select class="form-control" name="propertyType" id="propertyType" required disabled>
                            <option>Choose Property Type</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="file">Send To</label>
                        <select id="choices-multiple-remove-button" placeholder="Please Select Email" multiple name="contract_id[]" required autocomplete="off">
                            @foreach($contacts as $list)
                            <option value="{{ $list->id }}">{{ $list->email}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group {{ $errors->has('subject') ? 'has-error' : '' }} col-md-6">
                        <label for="subject">Subject*</label>
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
                    </div>
                </div>
            </div>
            <div class="unitowner">
                <div class="form-row">
                    <div class="form-group {{ $errors->has('strata_unit') ? 'has-error' : '' }} col-md-4">
                        <label for="strata_unit">Strata Unit</label>
                        <input type="text" id="strata_unit" name="strata_unit" class="form-control" placeholder="Strata Unit">
                    </div>
                    <div class="form-group {{ $errors->has('price_number') ? 'has-error' : '' }} col-md-4">
                        <label for="price_number">Purchase Price In Number</label>
                        <input type="number" min="1" id="price_number" name="price_number" class="form-control" placeholder="Purchase Price In Number">
                    </div>
                    <div class="form-group {{ $errors->has('price_words') ? 'has-error' : '' }} col-md-4">
                        <label for="price_words">Purchase Price In Words</label>
                        <input type="text" id="price_words" name="price_words" class="form-control" placeholder="Purchase Price In Words" readonly="">
                        <input type="hidden" id="new_price_words" name="price_words">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group {{ $errors->has('reservation_deposit') ? 'has-error' : '' }} col-md-4">
                        <label for="reservation_deposit">Reservation Deposit</label>
                        <input type="number" id="reservation_deposit" name="reservation_deposit" class="form-control" placeholder="Reservation Deposit">
                        <input type="hidden" id="reservation_deposit_words" name="reservation_deposit_words">
                    </div>
                    <div class="form-row col-md-4">
                        <div class="form-group {{ $errors->has('initial_deposit_pre') ? 'has-error' : '' }} col-md-6">
                            <label for="initial_deposit_pre">Initial Deposit %</label>
                            <input type="number" max="100" onchange="handleChange(this);" id="initial_deposit_pre" name="initial_deposit_pre" class="form-control" placeholder="Initial Deposit %" disabled="">
                        </div>
                        <div class="form-group {{ $errors->has('initial_deposit') ? 'has-error' : '' }} col-md-6">
                            <label for="initial_deposit">Initial Deposit</label>
                            <input type="number" min="0" id="initial_deposit" name="initial_deposit" class="form-control" placeholder="Initial Deposit" disabled="">
                            <input type="hidden" min="0" id="new_initial_deposit" name="new_initial_deposit">
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('balance_price') ? 'has-error' : '' }} col-md-4">
                        <label for="balance_price">Balance of Purchase Price</label>
                        <input type="text" id="balance_price" name="balance_price" class="form-control" placeholder="Balance of Purchase Price" readonly="">
                        <input type="hidden" id="new_balance_price" name="balance_price">

                    </div>
                </div>
            </div>
            <div class="unitowner">
                <h4> Seller Details</h4>
                <div class="form-row">
                    <div class="form-group {{ $errors->has('seller_by') ? 'has-error' : '' }} col-md-4">
                        <label for="seller_by">Sold Out</label>
                        <select id="seller_by" placeholder="Please Select By" name="seller_by" multiple autocomplete="off">
                            @foreach($sellers as $seller)
                            <option value="{{ $seller->id }}">{{ $seller->email}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group {{ $errors->has('seller_name') ? 'has-error' : '' }} col-md-4">
                        <label for="seller_name">Seller Name</label>
                        <input type="text" id="seller_name" name="seller_name" class="form-control" placeholder="Seller Name" readonly>
                        <input type="hidden" id="new_seller_name" name="seller_name" value="N.A">
                        <input type="hidden" id="new_by" name="by" value="N.A">
                        <input type="hidden" id="seller_email" name="seller_email" value="N.A">
                    </div>
                    <div class="form-group {{ $errors->has('seller_title') ? 'has-error' : '' }} col-md-4">
                        <label for="seller_title">Seller Title</label>
                        <input type="text" id="seller_title" name="seller_title" class="form-control" placeholder="Seller Title" readonly>
                        <input type="hidden" id="new_seller_title" name="seller_title" value="N.A">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group {{ $errors->has('executed_of') ? 'has-error' : '' }} col-md-12">
                        <label for="executed_of">Executed as of</label>
                        <input type="text" id="executed_of" name="executed_of" class="form-control" placeholder="Executed as of" readonly>
                        <input type="hidden" id="new_executed_of" name="executed_of" value="N.A">
                    </div>
               </div>
                <div class="form-row form-group don-snd">
                    <input type="checkbox" id="seller_email_contract" name="seller_email_contract" value="NULL">
                    <label for="seller_email_contract">Send contract copy to seller </label>
                </div>
           </div>
            <div class="form-group {{ $errors->has('message_body') ? 'has-error' : '' }}">
                <label for="message">Message<span>*</span></label>
                <textarea id="message_body" name="message_body" class="form-control" placeholder="Message" required></textarea>
            </div>
            
            <div class="form-row form-group don-snd">
                <input type="checkbox" id="amendment" name="amendment" value="amendment">
                <label for="amendment"> Amendment</label>
            </div>

            <div class="form-group {{ $errors->has('amendment_text') ? 'has-error' : '' }} amendment_textshow" style="display: none;">
                <label for="amendment_text">Amendment Text<span>*</span></label>
                <textarea id="amendment_text" name="amendment_text" class="form-control" placeholder="Amendment"></textarea>
            </div>

            <button type="submit" class="btn btn-success btntxt">Send</button>
            </div>
        </form>
    </div>
</div>
@endsection


<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<link rel="stylesheet" href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569006288/BBBootstrap/choices.min.css?version=7.0.0">
<script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569006273/BBBootstrap/choices.min.js?version=7.0.0"></script>

<script type="text/javascript"> 
function numberToWords(number) {  
    var digit = ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];  
    var elevenSeries = ['ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'];  
    var countingByTens = ['twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'];  
    var shortScale = ['', 'thousand', 'million', 'billion', 'trillion'];  

    number = number.toString(); number = number.replace(/[\, ]/g, ''); if (number != parseFloat(number)) return 'not a number'; var x = number.indexOf('.'); if (x == -1) x = number.length; if (x > 15) return 'too big'; var n = number.split(''); var str = ''; var sk = 0; for (var i = 0; i < x; i++) { if ((x - i) % 3 == 2) { if (n[i] == '1') { str += elevenSeries[Number(n[i + 1])] + ' '; i++; sk = 1; } else if (n[i] != 0) { str += countingByTens[n[i] - 2] + ' '; sk = 1; } } else if (n[i] != 0) { str += digit[n[i]] + ' '; if ((x - i) % 3 == 0) str += 'hundred '; sk = 1; } if ((x - i) % 3 == 1) { if (sk) str += shortScale[(x - i - 1) / 3] + ' '; sk = 0; } } if (x != number.length) { var y = number.length; str += 'point '; for (var i = x + 1; i < y; i++) str += digit[n[i]] + ' '; } str = str.replace(/\number+/g, ' '); return str.trim();  
} 

function percentage(num, per){
  return (num/100)*per;
}
function handleChange(input) {
    var price_number           = $('#price_number').val();
    var initial_deposit     = $('#initial_deposit').val();
    var reservation_deposit = $('#reservation_deposit').val();
    if (input.value < 0) input.value = 0;
    if (input.value > 100) input.value = 100;
    $('#new_initial_deposit,#initial_deposit').val(percentage(price_number,input.value));
    var bal = parseInt(price_number) - parseInt(initial_deposit) - parseInt(reservation_deposit);
    $('#new_balance_price,#balance_price').val(bal);
}
$(document).ready(function () {
    $('#price_number').on("input", function() {
        var dInput              = this.value;
        var initial_deposit_pre = $('#initial_deposit_pre').val();
        var initial_deposit     = $('#initial_deposit').val();
        var reservation_deposit = $('#reservation_deposit').val();
        $('#price_words,#new_price_words').val(numberToWords(dInput));
        $('#new_initial_deposit,#initial_deposit').val(percentage(dInput,initial_deposit_pre));
        $('#initial_deposit_pre').val((parseInt(initial_deposit)/parseInt(dInput)) * 100);
        var bal = parseInt(dInput) - parseInt(initial_deposit) - parseInt(reservation_deposit);
        $('#new_balance_price,#balance_price').val(bal);
        if (dInput != "") {
           $('#initial_deposit_pre,#initial_deposit').prop("disabled", false);
           
        }else{
           $('#initial_deposit_pre,#initial_deposit').prop("disabled", true);
           
        }
    });

    var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
    removeItemButton: true,
    maxItemCount:2,
    searchResultLimit:5,
    renderChoiceLimit:5
    });
    var multipleCancelButtons = new Choices('#seller_by', {
    removeItemButton: true,
    maxItemCount:1,
    searchResultLimit:5,
    renderChoiceLimit:5
    });
    
    //for contract Type
    $('#contract_type').on('change', function() {
        var contarctType = this.value;
        if(contarctType==1){
            $(".btntxt").html("Send");
            $('#subject').prop("disabled", false);
            $('#message_body').prop("disabled", false);
            $("#subject").prop('required',true);
            $("#message_body").prop('required',true);
        }else{
            $(".btntxt").html("Print");
            $('#subject').prop("disabled", true);
            $('#message_body').prop("disabled", true);
            $("#subject").prop('required',false);
            $("#message_body").prop('required',false);
            
        }
    });

    $('#seller_by').on('change', function() {
        var vid = this.value;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: 'getDatabyId',
            type: 'post',
            data: {id:vid},
            dataType: 'json',
            success: function(response){ 
                $('#seller_name,#new_seller_name').val(response.name);
                $('#new_by').val(response.by);
                $('#seller_title,#new_seller_title').val(response.title);
                $('#executed_of,#new_executed_of').val(response.executed_as_of) ;
                $('#seller_email_contract,#seller_email').val(response.email) ;
            }
        });
    });

    //change option for property
    $('#projectType').on('change', function() {
        var id = this.value;
        console.log(id);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: 'getProjectportrybyId',
            type: 'post',
            data: {id:id},
            dataType: 'json',
            success: function(response){ 
                if(!Object.keys(response).length){
                    $('#propertyType').prop("disabled", true);
                }   
                else 
                {
                    $('#propertyType').prop("disabled", false);
                    var dropdown = $('#propertyType');
                    dropdown.empty();
                    dropdown.append('<option selected="true" disabled>Choose Property Type</option>');
                    dropdown.prop('selectedIndex', 0);
                    $.each(response, function (key, entry) {
                        dropdown.append($('<option></option>').attr('value', entry.id).text(entry.property_name));
                    })
                }
            }
        });
    });

    //get Balance
    $('#initial_deposit').on("input", function() {
        var price_number    = $('#price_number').val();
        var initial_deposit = $('#initial_deposit').val();
        var reservation_deposit = $('#reservation_deposit').val();
        
      
        if (parseInt(price_number) >= parseInt(initial_deposit)) {
            var bal = parseInt(price_number) - parseInt(initial_deposit) - parseInt(reservation_deposit);
           
            $('#initial_deposit_pre').val((parseInt(initial_deposit)/parseInt(price_number)) * 100);

            $('#new_balance_price,#balance_price').val(bal);
            $('#reservation_deposit_words').val(numberToWords(bal));
        } else{
            toastr.error('Please enter the underprice!');
            $('#reservation_deposit_words').val(numberToWords(0));
            $('#new_balance_price,#balance_price').val(0);

        }
    });

    //get per
    $('#initial_deposit_pre').on("input", function() {
        $('#initial_deposit_pre').val();
        var price_number        = $('#price_number').val();
        var initial_deposit     = $('#initial_deposit').val();
        var initial_deposit_pre = $('#initial_deposit_pre').val();
        console.log(percentage(price_number,initial_deposit_pre));
        $('#new_initial_deposit,#initial_deposit').val(percentage(price_number,initial_deposit_pre));
    });

   // Amendement
    $("#amendment").change(function() {
        if(this.checked) {
            $(".amendment_textshow").css("display", "block");
            $('#amendment_text').prop("required", true);
        } else{
            $(".amendment_textshow").css("display", "none");
            $('#amendment_text').prop("required", false);
        }
    });

});
</script>