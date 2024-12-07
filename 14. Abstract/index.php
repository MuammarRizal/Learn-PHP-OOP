<-- ABSTRAC CLASS
Abstract class adalah sebuah class dalam OOP yang tidak dapat diinstansiasi atau dibuat objectnya. Abstract class biasanya berisi fitur dari sebuah class yang belum di implementasikan.

Didalam sebuah abstrct class kita dapat membuat property dan method yang nantinya dapat digunakan oleh child class.

<!-- ABSTRACT METHOD
Abstract method adalah sebuah method yang harus di implementasikan oleh child class. Abstract method hanya ada pada abstract class dan interface

biasanya setiap membuat mehthod kita pasti punya kurung kurawal {}, pada abstract method hal tersebut tidak dapat ditemui karena 

abstract method adalah sebuah method yang tidak memiliki body atau badan method

abstract method harus didefinisikan ulang dan kita tidak dapat menggunakan keyword parent untuk memanggil abstract method pada parent class.

<!-- KEGUNAAN ABSTRACT CLASS DAN ABSTRAC METHOD
Abstract class dan abstract method berguna untuk memastikan child class memiliki fitur yang telah ditentukan sebelumnya. 

Abstract class akan berguna saat kita membahas tentang type hinting atau parameter hinting. dengan abstract class dan abstract method kita bisa lebih percaya diri ketika memanggil sebuah method karena dapat dipastikan method tersebut dimiliki oleh child class
