@include('Forntend.navbar')

<div class="container">
 <div class="row">
  <div class="col-md-4">

   <div class="user-wrapper">
    <ul class="users">
    @foreach ($users as $user)
     <li  class="user " id="{{$user->id}}">
      @if($user->unread)
       <span class="pending">{{ $user->unread }}</span>
      @endif

      <div class="media">

       <div class="media-left">
        <img src="{{asset('uploads/users_images/' . $user->image)}}" class="media-object">
       </div>

       <div class="media-body">
        <p class="name">{{$user->name}}</p>
       </div>

      </div>
     </li>
    @endforeach
    </ul>
   </div>{{--End of user-wrapper--}}

  </div>{{--End of col-md-4--}}
   <div class="col-md-8" id="message">

   </div>



 </div>{{--End of row--}}

</div>{{--End of container--}}


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://js.pusher.com/5.1/pusher.min.js"></script>
    <script>

     var receiver_id = '',

        my_id = "{{Auth::id()}}";

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

     $(document).ready(function ()
      {


         // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('004ec329ed956e70bf86', {
      cluster: 'ap2',
      forceTLS: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));

      if(my_id == data.from)
      {
        alert('sender');
      } else if(my_id == data.to)
      {
          if(receiver_id == data.from)
          {
              $("#" + data.from).click();

          }else{

              var pending = parseInt($('#' + data.from).find('.pending').html());

              if(pending){
                  $("#" + data.from).find('.pending').html(pending + 1);
              }else {
                $("#" + data.from).append('<span class="pending">1</span>');
              }
          }

      }
    });

          $('.user').click( function(){

           $('.user').removeClass('active1');
           $(this).addClass('active1');

           receiver_id = $(this).attr('id');

           $.ajax({
               type: "get",
               url: "message/" + receiver_id,
               data: "",
               cache: false,
               success: function (data) {

                  $("#message").html(data);
               }
           });
          });

        $(document).on('keyup', '.input-text input', function (e) {
            var message = $(this).val();

            // check if enter key is pressed and message is not null also receiver is selected
            if (e.keyCode == 13 && message != '' && receiver_id != '') {
                $(this).val(''); // while pressed enter text box will be empty

                var datastr = "receiver_id=" + receiver_id + "&message=" + message;
                $.ajax({
                    type: "post",
                    url: "message", // need to create this post route
                    data: datastr,
                    cache: false,
                    success: function (data) {

                    },
                    error: function (jqXHR, status, err) {
                    },
                    complete: function () {
                        scrollToBottomFunc();
                    }
                });
            }
        });

      });
    </script>

