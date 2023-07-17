<?php

/**
 * 1. Bir adet class tanımlayınız. Class içerisinde bir adet değişken(private) bir adet fonksiyon(public) tanımlayın ve bu
 * değerleri kullanın.Değişken constructor üzerinden gönderilecek, ve aynı zamanda fonksiyonda ekrana basılacak.
 *
 * 2. Abstarct class örneği gerçekleştirin. -> 1 Abstract Class -> 2 Class üzerinde extends dedilecek ve fonksiyon çağrılacak
 *
 * 3. Form hazırlayın. (Login Form) -> 2 adet sabit tanımlanacak. Girilen değerler bu sabit değerlere eşit ise Session oluştur.
 *
 * 4. 1 - 30 arasındaki asal sayıları bulan code bloğunu oluşturunuz.
 *
 * 5. Faktoriyel hesabı yapan code bloğunu oluşturunuz.
 *
 * 6. Matematiksel işlem operatörleri için bir kod yazınız. Bu kod class ile yazılsın. Bu class 4 adet fonlksiyon içerecek
 * (Toplama - Çıkarma - Çarpma - Bölme). İşlemi tabi tutulacak değerler constructor ile verilecek. Herhangi bir değer
 * girilmezse hata mesajı verilecek.
 *
 *
 * 7. Kayıt formu oluşturun. Validation işlemelerini gerçekleştiriniz. Header ve exit kullanmayı unutmayın.
 *          - Mail Kontrolü
 *          - Password min 8 karakter kontrolü
 *          - Tüm değerler dolu olsun.
 *
 *
 *
 *
 * ******* ÖDEV ********
 * 1. Sezar şifreleme yöntemini PHP üzerinde uygulayınız. Normal metni sezar ile şifrelesin, şifreli metni eski haline getirsin
 * 2. Register Form oluşturun.
 *      - Name - Surname (Required)
 *      - E-Mail (Required)
 *      - Phone number (İsteğe Bağlı olsun. Karakter girilmesin. Sadece sayı girilmeli)
 *      - Doğum Tarihi (İsteğe Bağlı olsun. Farklı bir text girilmemeli sadece tarih değeri girilmeli)
 *      - Cinsiyet (İsteğe bağlı).
 *      - Güvenlik sorusu (Required)(Select).
 *      - Okudum, onaylıyorum checkbox (Required).
 *
 *
 *      Not : Bu işlem tamamlandıktan sonra kullanıcı mail, password ve güvenlik şifresi ile giriş yapacak. Eğer ki
 *      tüm veriler doğru ise giriş yapacak ve veriler session üzerine kaydedilecek. Yanlış ise login forma header
 *      ile geri yönlendirme yapılacak. Aynı zamanda hata mesajı basılcak. Hata mesajı register form için de geçerli
 *      Eğer ki yanlış veri girmişse yine hata mesajı formun üzerinde basılcak ve ragister forma geri yönlendirilecek.
 */
