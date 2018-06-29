@foreach($roster->roster_json['players'] as $team)

    {{ $team['display_name'] .' | Birthdate: '. $team['birthdate'] .' | Age: '. $team['age'] .' | Birthplace: '.  $team['birthplace'] .' | Height: '. $team['height_formatted'] .' | Weight: '. $team['weight_lb'] .' | Position: '. $team['position'] .' | Uniform #: '. $team['uniform_number'] }}
    <br/>
    <br/>



@endforeach