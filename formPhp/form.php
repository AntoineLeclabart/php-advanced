<form  action="thanks.php"  method="POST">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="téléphone">Numéro de téléphone :</label>
        <input  type="telephone"  id="telephone"  name="user_phone_number">
    </div>
    <div>
        <label for="sujet">Sujet de votre message:</label>
         <select id="sujet" name="select_subject">
         <option value="">--Veuillez choisir le sujet de votre message--</option>
         <option value="information">Information</option>
         <option value="demande">Demande</option>
         <option value="réclamation">Réclamation</option>
         <option value="suivi">Suivi de dossier</option>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>

