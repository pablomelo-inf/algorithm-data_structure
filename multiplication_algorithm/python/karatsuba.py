def multiplication_karatsuba(x,y): 

    if x < 10 or y < 10:
        return x * y
    
    n = max(len(str(x)), len(str(y)))

    k = n // 2
    p = (10 ** (k))

    a = x // p
    b = x % p 

    c = y // p
    d = y % p

    ac = multiplication_karatsuba(a,c)
    bd = multiplication_karatsuba(b,d)
    
    ad_bc = multiplication_karatsuba(a+b, c+d) - ac - bd

    return ac * (10 ** (2 * k)) + (ad_bc * p) + bd

