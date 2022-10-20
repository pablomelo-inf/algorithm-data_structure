def buildMaxHeap(arr):
    sizeHeap = len(arr)
    n = sizeHeap//2

    for i in range(n, -1, -1):
        heapify(arr, sizeHeap, i)

def right(i):
    return 2 * i + 1

def left(i):
    return 2 * i


def heapify(arr, sizeHeap, i):
    l = left(i);
    r = right(i);     

    if l < sizeHeap and arr[l] > arr[i]:
        largest = l 
    else:
        largest = i
    
    if r < sizeHeap and arr[r] > arr[largest]:
        largest = r 
    
    if largest != i:
        arr[i], arr[largest] = arr[largest], arr[i]
        heapify(arr, sizeHeap, largest) 

def heapsort(arr):
    N = len(arr)
    buildMaxHeap(arr);

    for i in range(N-1, 0, -1):
        arr[i], arr[0] = arr[0], arr[i]
        heapify(arr,i, 0)

arr = [7.11,12.97,6.99,5.09,6.96,89.09,98.71,10,12.05,1.3]
print(arr)
heapsort(arr)
print(arr)