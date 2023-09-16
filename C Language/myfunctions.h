int sum(int i, int j){
    return i + j;
}

int sub(int i, int j){
    return i - j;
}

int mul(int i, int j){
    return i * j;
}

int div(int i, int j){
    return i / j;
}

int mod(int i, int j){
    return i % j;
}

int max(int i, int j){
    if(i > j){
        return i;
    }else{
        return j;
    }
}

int min(int i, int j){
    if(i < j){
        return i;
    }else{
        return j;
    }
}

int square(int i){
    return i * i;
}

int cube(int i){
    return i * i * i;
}
