# Encryption-Decryption-Using-OpenSSL

Enkripsi \(JSEncrypt\) dan Dekripsi \(PHP OpenSSL\)



Generate Private Key:

```
openssl genrsa -out private.pem 1024
```

Generate Public Key:

```
openssl rsa -pubout -in private.pem -out public.pem
```



1. Generate Private dan Public Key
2. Inputkan public key ke dalam index.html
3. Inputkan private key ke dalam login.php