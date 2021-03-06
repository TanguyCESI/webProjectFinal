<!doctype html>

<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Validation de commande</title>
        <link rel="stylesheet" href="{{ asset('css/project-css/email.css') }}">
    </head>

    <body>
        <div>
            <h1>Bureau de élèves - CESI</h1>
        </div>

        <div>
            <p>Référence de la commande : #{{ $order->id }}</p>
            <p>Total du panier : {{ $order->price }}€</p>
        </div>

        <br>

        <div>
            <img src="{{ asset('assets/imgs/cesi_logo.png') }}" alt="CESI Logo">
            <p>Merci d'avoir choisi la boutique du CESI</p>
        </div>
        
        <hr>

        <div>
            <p>Ceci est un mail automatique, merci de ne pas y répondre.</p>
            <p>Pour nous contacter, veuillez cliquer sur le lien suivant : <a href="{{ route('contact') }}">Contact</a></p>
        </div>

        <br>

        <div>
            <p>Détails de la commande :</p>
            <table>
                <tr>
                    <th>Nom</th>
                    <th>Prix Unitaire</th>
                    <th>Quantité</th>
                    <th>Prix Total</th>
                </tr>
                @foreach($order->contains as $c)
                    <tr>
                        <td>{{ $c->product->name }}</td>
                        <td>{{ $c->product->price }}€</td>
                        <td>{{ $c->quantity }}</td>
                        <td>{{ $c->quantity * $c->product->price}}€</td>
                    </tr>
                @endforeach
            </table>
        </div>

        <br>

        <div>
            <p>Chère cliente, cher client,</p>
            <p>Vous avez passé commande sur notre site et nous vous en remercions.</p>
            <p>IMPORTANT - Suite à ce mail, vous avez été directement mis en relation avec un membre de l'équipe.
                Il/Elle vous contactera dans les plus bref délai quand à la bonne procédure de la commande.</p>
            <p>A la date de réception de votre colis, vous bénéficirez d'un délai de 14 jours pour nous signaler votre intention de vous rétracter,
                puis vous aurez un nouveau délai de 14 jours pour nous retourner le(s) produit(s) concerné(s).</p>
            <p>Merci de votre compréhension,</p>
            <p>L'équipe du BDE</p>
        </div>
    </body>

</html>
