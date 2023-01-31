<form  method="post" class="advance_search_query booking-form contact">
    <div class="form-bg seven">
        <div class="form-content">
            <h2 class="form-title">Contactez-nous</h2>
            <div class="form-group">
                <label>Nom et prénom <i class="required"></i></label>
                <input type="text" name="nom" class="input-style" placeholder="Nom et prénom">
            </div>


            <div class="form-group">
                <label for="type" >Types de locataire <i class="required"></i></label>
                <select class="wide input-style" name="type" id="type">
                    <option  selected>Choisir types de locataire</option>
                    <option value="ordinaire">Locataires ordinaires</option>
                    <option value="baux">Locataires enregistrés sous baux</option>
                </select>
            </div>
            <div class="form-group">
                <label class="" for="phone">Téléphone <i class="required"></i></label>
                <input type="tel" class="full-width has-padding has-border input-style" name="phone" id="phone" value="" style="padding: 7px 15px 7px 45px !important;"  required>
                <input type="hidden"  name="isoPhone" id="isoPhone" >
                <input type="hidden"  name="dialPhone" id="dialPhone">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="input-style" name="Email" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="message"> Message <i class="required"></i></label>
                <textarea name="message" id="message" placeholder="Message" class="form-controller input-style"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="button default-template-gradient button-radius">Request Booking</button>
            </div><!-- /.form-group -->
        </div><!-- /.form-content -->
    </div><!-- /.form-bg -->
</form>