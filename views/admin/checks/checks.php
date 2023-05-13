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
    <section>
        <nav class='navbar navbar-expand-lg ' style='background-color:rgb(139, 108, 69);'>
            <div class='w-100 d-flex justify-content-between '>
                <div class='' d-flex justify-content-between'>
                    <div>
                        <a class='navbar-brand'></a>
                    </div>
                    <div class='collapse navbar-collapse'>
                        <ul class='navbar-nav mr-auto'>

                            <li class='nav-item'>
                                <img src='../../public/images/coffe.png' alt='' class='logo' style='width:50px; height:50px; border-radius:50%; margin-right:20px; margin-left:5px; ' />
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link  text-light'>Home</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link  text-light'>Product</a>
                            </li>

                            <li class='nav-item'>
                                <a class='nav-link  text-light'>Users</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link  text-light'>Manual Order</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link  text-light'>Checks</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class='d-flex justify-content align-items-center'>
                    <div class='row'>
                        <div class='col'>
                            <div class='w-100 d-flex justify-content align-items-center'>
                                <img class='logo mx-3 ' src='../../public/images/user-circle-svgrepo-com.svg' style='width:50px; height:50px;' />
                                <a class='text-light text-decoration-none '>Admin</a>
                            </div>
                        </div>
                    </div>
                    <ul class='navbar-nav mr-auto'>
                        <li class='nav-item'>
                            <i class='fa-regular fa-user text-light'></i>
                        </li>
                        <li class='nav-item'>
                            <a><i class='fontSize mx-3 text-light fa-solid fa-right-from-bracket'></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br><br>
        <div class="container">
            <input type="date" name="start" id="">&nbsp;&nbsp;&nbsp;
            <input type="date" name="end" id="">

            <br><br>
            <select name="user_id">
                <option>hasnaa</option><
                <option>heba</option>
            </select>
            <br><br>
            <div>
                <table class='table table-striped table-bordered table-hover text-center w-75 mt-5' style='margin:auto;'>
                    <tr class=' table-secondary'>
                    <th scope="col">Name</th>
                    <th scope="col">Total amount</th>
                    </tr>
                    <tr class='table-secondary'>
                        <th><button id="1" onclick="addRow(this)">+</button> Hasnaa</th>
                        <td>122</td>
                    </tr>
                    <tr class='table-secondary'>
                        <th><button id="2" onclick="addRow(this)">-</button> Heba </th>
                        <td>322</td>
                    </tr>
                </table>
                <table class='table table-striped table-bordered table-hover text-center w-75 mt-5' style='margin:auto;'>
                    <tr class=' table-secondary'>
                    <th scope="col">Order Date</th>
                    <th scope="col">Amount</th>
                    </tr>
                    <tr class='table-secondary'>
                        <th><button id="1" onclick="addRow(this)">+</button>13/5/2023</th>
                        <td>100 EGP</td>
                    </tr>
                    <tr class='table-secondary'>
                        <th><button id="2" onclick="addRow(this)">-</button> 12/11/1999</th>
                        <td>55 EGP</td>
                    </tr>
                </table>
                <textarea>kjugjyfjffffffffffffffffffffffffffffffffffffffff
                    jdjjjjjjjjjjjjjjjjjjjjjj
                    oiyhii
                    
                </textarea>
                        
                    
                
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