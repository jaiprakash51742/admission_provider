<style type="text/css">
   .tt
   {
   border: 1px solid;
   width: 100%;
   }
</style>
<div class="jumbotron">
   <h3 class="text-center">Want Help with Admission 2024</h3>
   <p class="text-center">Leave us your details and we will contact you soon.</p>
   <form method="post">
   	<div class="adm alert-danger text-center text-capitalize" style="padding: 15px; display: none; margin-bottom: 5px; border-radius: 5px;"></div>
      <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group ">
               <input type="text" class="form-control tt" placeholder="First Name" id="name_all"/>
            </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
               <input type="text" id="email_all" class="form-control tt" placeholder="Email"/>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
               <input type="text" id="number_all" maxlength="10" onkeypress="return onlyNumberKey(event)" class="form-control tt" placeholder="Contact Number"/>
            </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="form-group">
               <select class="form-control " id="select_all" style="width: 100%;">
                  <option value="">---------Select Course--------</option>
                  <option value="Engineering">Engineering(B.Tech/B.E/M.Tech)</option>
                  <option value="Medical">Medical</option>
                  <option value="Management">Management</option>
                  <option value="Law">Law</option>
                  <option value="Others">Others</option>
               </select>
            </div>
         </div>
      </div>
      <div class="form-group">
         <textarea class="form-control input-sm" style="width:100%;" placeholder="Text here..." rows="3" id="message_all"></textarea>
      </div>
      <input type="button" id="btnenquiryall" value="Submit Enquiry" class="btn btn-info btn-block"/>
   </form>
</div>

