<table class="table table-striped">
	<tr>
		<th>No Regu</th>
				<th>
                    Giat A <br>
                    Pioneering
                </th>
				<th>
                    Giat B <br>
                    Scout Chef
                </th>
				<th>
                    Giat C <br>
                    SMS
                </th>
				<th>
                    Giat D <br>
                    BPT
                </th>
				<th>
                    Giat E <br>
                    Fotografi
                </th>
				<th>
                    Giat F <br>
                    PPGD
                </th>
				<th>
                    Giat G <br>
                    CTP
                </th>
	</tr>
    @foreach($data as $key)
    <tr>
        <td>{{ $key->no_dada }}</td>
        <td>{{ $key->giat_a }}</td>
        <td>{{ $key->giat_b }}</td>
        <td>{{ $key->giat_c }}</td>
        <td>{{ $key->giat_d }}</td>
        <td>{{ $key->giat_e }}</td>
        <td>{{ $key->giat_f }}</td>
        <td>{{ $key->giat_g }}</td>
    </tr>
    @endforeach
</table>