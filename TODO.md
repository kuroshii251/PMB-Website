# TODO: Fix Edit Data in Daftarform (Update both Form and Payment tables)

## Steps:
1. [x] Update FormController::update():
   - Remove 'email' from validation.
   - Handle foto_pas preservation/new upload.
   - Get user from Form, find or create Payment, update foto_payment.
   - Add success/error flash.

2. [x] Add flash message display in daftarform.blade.php.

3. [x] Test: Edit data -> verify both tables updated, images if uploaded.

4. [x] Complete task.
