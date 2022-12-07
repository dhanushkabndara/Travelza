@extends('layouts.layout')
@section('content')

<section class="add_your_hotel">
     <h1 class="title">YOUR HOTEL</h1>

     <div class="container">
       <div class="hotel-form row">
         <div class="form-field col-lg-6">
           <input id="name" class="input-text" type="text" name="">
           <label for="name" class="label">name</label>
         </div>
           <div class="form-field col-lg-6">
           <input id="email" class="input-text" type="email" name="">
           <label for="email" class="label">email</label>
         </div>
           <div class="form-field col-lg-6">
           <input id="company" class="input-text" type="text" name="">
           <label for="company" class="label">company name</label>
         </div>
         <div class="form-field col-lg-6">
           <input id="phone" class="input-text" type="text" name="">
           <label for="phone" class="label">contact number</label>
         </div>
         <div class="form-field col-lg-6">
          <textarea class="form-control" placeholder="About your hotel" id="floatingTextarea"></textarea>
           
         </div>
         <div class="form-field col-lg-6">
  <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
  
</div>
         <div class="form-field col-lg-12">
           <input class="submit-btn" type="submit" value="post" name="">
         </div>
       </div>
     </div>
   </section> 

    
   @endsection