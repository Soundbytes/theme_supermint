
## Supermint3 theme for Concrete5

### Manual test procedure

### Installation

1. Login as user `admin` to the concrete5 site under development 
(C5SUD).

2. In the admin dashboard click on
   ```
   Extend Concrete5
   -> Add Functionality
   ```

3. The Supermint Theme package should be available to install, listed 
with
   the appropriate version number.
   
   
![01-figure-install-supermint-button](../assets/figures/01-figure-install-supermint-button.PNG 
"Install button")

4. Click the install button

5. Choose a starting point:

   a. None  (defaults to this choice)
   b. Portfolied
   c. Base
   d. Business

   Hovering the curser over each choice triggers a pop up
   modal that allows one to click on 1) Choose {name} 2) Live Preview 

   Below the choices is a radio selection button labeled
   Swap Site Contents
   o. No. Do not remove any content or files from this website.
   o. Yes. Reset site content with the content found in this package

     * Choosing the None starting point causes the radio button to auto
       select Swap Site Content = No...
     * Choosing the starting points causes the radio button to auto
       select Swap Site Content = Yes...
     * However the user can reset the selection


   Finally there is a selection bar at the bottom with choice buttons
   * `Cancel`
   * `Install Supermint Theme`

6. Click the `Install Supermint Theme` button
   * With Swap Site Contents = yes
     - Causes automatic logout from the admin login
     - No apparent installation took place

   * With Swap Site Contents = no
     - Starts a very long running process on server with no feedback
       except browser spinner.

     - Resulting notification

       
![02-figure-installed-supermint-notice](../assets/figures/02-figure-installed-supermint-notice.PNG 
"Installed notice")

7. Click the back to site button upper left corner.
   * The concrete5 get help screen pops up.

