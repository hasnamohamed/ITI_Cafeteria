<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <input type="date" name="start" id="">
        <input type="date" name="end" id="">

        <select name="user_id">
            <option>hasnaa</option>
        </select>

        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Total amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th><button id="1" onclick="addRow(this)">+</button> Hasnaa</th>
                        <td>122</td>
                    </tr>
                    <tr>
                        <th><button id="2" onclick="addRow(this)">+</button> Heba </th>
                        <td>322</td>
                        <td id="2"></td>
                    </tr>
                </tbody>
            </table>
            <div>
            <div id="">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Order Date</th>
                            <th scope="col">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="tr">
                            <th>1</th>
                            <td>Mark</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    <script>
        function addRow(top) {
            // (B1) GET TABLE       

            var tabels = document.getElementsByTagName("tabel");
            for (let i = 0; i < tabels.length; i++) {
                const element = tabels[i].getAttribute('id');
                // var anotherTabel = document.createElement('tabel');
                // var thead = document.createElement('thead');
                // anotherTabel.appendChild(thead);
                // var tr = document.createElement('tr');
                // thead.appendChild(tr);
                // var th = document.createElement('th');
                // tr.appendChild(th);
                // const textnode = document.createTextNode("Order Date");
                // th.appendChild(textnode);
                // var th2 = document.createElement('th');
                // tr.appendChild(th2);
                // const textnode2 = document.createTextNode("Amount");
                // th2.appendChild(textnode2);

                // var tbody = document.createElement('tbody');
                // anotherTabel.appendChild(tbody);
                // var tr2 = document.createElement('tr');
                // tbody.appendChild(tr2);

                if (element == top.id) {
                    console.log(tabels[i])
                }
            }
            // (B2) INSERT ROW
            // if (top) {
            //     var row = table.insertRow(0);
            // } else {
            //     var row = table.insertRow();
            // }

            // // (B3) INSERT CELLS
            // var cell = row.insertCell();
            // cell.innerHTML = "AA";
            // cell = row.insertCell();
            // cell.innerHTML = "BB";
        }
    </script>
</body>

</html>