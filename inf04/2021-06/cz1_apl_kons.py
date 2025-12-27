class Tablica:
    def __init__(self):
        self.tablica = []

    def wpisz(self):
        for _ in range(10):
            wartosc = int(input('Podaj liczbe: '))
            self.tablica.append(wartosc)

    def __max_index(self, start):
        max_i = start
        for j in range(start + 1, len(self.tablica)):
            if self.tablica[j] > self.tablica[max_i]:
                max_i = j
        return max_i

    def sort(self):
        for i in range(len(self.tablica)):
            max_i = self.__max_index(i)
            self.tablica[i], self.tablica[max_i] = self.tablica[max_i], self.tablica[i]

    def wyswietl(self):
        print(self.tablica)


x = Tablica()
x.wpisz()
x.sort()
x.wyswietl()
        