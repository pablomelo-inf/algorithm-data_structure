def merge(l, r):
    A = []
    i, j = 0, 0
    while i < len(l) and j < len(r):
        if l[i] <= r[j]:
            A.append(l[i])
            i = i + 1
        else:
            A.append(r[j])
            j = j + 1
    A += l[i:]
    A += r[j:]

    return A

def mergeSort(A):
    if len(A) > 1:
        q = len(A) // 2
        l = mergeSort(A[:q])
        r = mergeSort(A[q:])
        return merge(l,r)
    return A


