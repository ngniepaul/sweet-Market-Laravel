<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tp In2</title>
</head>

<body>
    <div>
        <h1>Liste des produits</h1><br>
        <table border="1">
            <thead>
                <tr>
                    <th>Nom produit</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as  $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td> {{ $item->quantity }} </td>
                        <td> {{ $item->unit_price }}</td>
                    </tr>
                @empty
                    <tr>
                        <td>

                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
