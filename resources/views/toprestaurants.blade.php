<!DOCTYPE html>
<html>
<head>
    <title>Top Restaurants in Baguio City</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class ="justify-center">
    <h1>Top Restaurants in Baguio City</h1>
    <table class="place-content-center border-separate border-spacing-[7px] border border-slate-500 ...">
        <thead>
          <tr>
            <th>Name</th>
            <th>Place</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td class="border border-slate-700 border-spacing-[7px]">{{ $r1 }}</td>
              <td class="border border-slate-700 border-spacing-[7px]">{{ $p1 }}</td>
            </tr>
            <tr>
              <td class="border border-slate-700 border-spacing-[7px]">{{ $r2 }}</td>
              <td class="border border-slate-700 border-spacing-[7px]">{{ $p2 }}</td>
            </tr>
            <tr>
              <td class="border border-slate-700 border-spacing-[7px]">{{ $r3 }}</td>
              <td class="border border-slate-700 border-spacing-[7px]">{{ $p3 }}</td>
            </tr>
            <tr>
                <td class="border border-slate-700 border-spacing-[7px]">{{ $r4 }}</td>
                <td class="border border-slate-700 border-spacing-[7px]">{{ $p4 }}</td>
              </tr>
            <tr>
                <td class="border border-slate-700 border-spacing-[7px]">{{ $r5 }}</td>
                <td class="border border-slate-700 border-spacing-[7px]">{{ $p5 }}</td>
            </tr>
          </tbody>
    </table>  
    </div>
</body>
</html>