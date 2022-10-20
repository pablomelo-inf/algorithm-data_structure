from random import randint
from mergesort import mergeSort
from heapsort import heapSort

A = []
for _ in range(1000000):
    A.append(randint(1,1000000))

print ("Result mergeSort: " + str(mergeSort(A)))
print ("Result heapSort: " + str(heapSort(A)))
