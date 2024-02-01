<div class="single-sidebar-widget">
   <div class="customer-login-register register-pt-0">
      <div class="register-form">
         <div class="form-register-title">
            <h4 class="subhead text-center">Don't confuse.<br><br>
               <span class="text-info">i am with you </span>
            </h4>
         </div>
         <form method="post">
            <div class="reg alert-danger text-center text-capitalize" style="padding: 5px; display: none; margin-bottom: 5px; border-radius: 5px;"></div>
            <div class="form-fild">
               <input type="text" placeholder="Name" id="name_reg" class="form-control" />
            </div>
            <div class="form-fild">
               <input type="text" placeholder="Email" id="email_reg" class="form-control"/>
            </div>
            <div class="form-fild">
               <input type="text" placeholder="Number" maxlength="10" class="form-control" onkeypress="return onlyNumberKey(event)" id="number_reg"/>
            </div>
            <div class="form-fild">
               <select class="form-control" id="select_reg" style="width: 100%;">
                  <option value="">Choose Course</option>
                  <option value="Engineering">Engineering</option>
                  <option value="Medical">Medical</option>
                  <option value="Management">Management</option>
                  <option value="Law">Law</option>
                  <option value="Others">Others</option>
               </select>
            </div>
            <div class="form-fild">
               <textarea placeholder="Type your message here.." cols="3" id="message_reg"></textarea>
            </div>
            <div class="register-submit">
               <button type="button" id="btnreg" class="btn">Register</button>
            </div>
         </form>
      </div>
   </div>
</div>