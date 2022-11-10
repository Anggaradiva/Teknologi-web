<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tempat Jual Tiket') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div > 
                    <head>
                    <body>
                    <h4 style="margin: 0px;">Boking tiket </h4>
        <hr/>
        <form action="formulir.php" method="post">
            <table>                
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="" placeholder="Masukkan Username"/></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" value="" placeholder="Masukkan Password"/></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis-kelamin" value="Laki-laki"/>Laki-laki
                        <input type="radio" name="jenis-kelamin" value="Perempuan"/>Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Jenis tiket</td>
                    <td>:</td>
                    <td>
                        <input type="checkbox" name="orang dewasa"/>orang dewasa
                        <input type="checkbox" name="anak-anak"/> anak-anak
                    </td>
                </tr>
                <tr>
                    <td>Asal negara</td>
                    <td>:</td>
                    <td><select name="Aasal_negara">
                        <option value="Singapura">Singapura</option>
                        <option value="Jepang">Jepang</option>
                        <option value="Korea">Korea</option>
                        <option value="China">China</option>                       
                    </select>
                    </td>
                </tr>
                <tr>
                    
                    <td colspan="3" align="right"><input type="submit" value="Simpan"></td>
                </tr>
            </table>    
        </form>
    </body

                    </body>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
