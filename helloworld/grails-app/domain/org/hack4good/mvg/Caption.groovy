package org.hack4good.mvg

class Caption {

    String caption
    int startingPoint
    int endPoint
    int accuracy

    static belongsTo = [video : Video, translation : Translation]

    static hasMany = [translations: Translation]

    static constraints = {
        startingPoint(unique: true, blank: false)
        endPoint(unique: true, blank: false)
    }
}
