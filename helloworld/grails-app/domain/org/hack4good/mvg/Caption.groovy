package org.hack4good.mvg

class Caption {

    int startingPoint
    int endPoint
    int accuracy

    static belongsTo = [video : Video]

    static constraints = {
        startingPoint(unique: true, blank: false)
        endPoint(unique: true, blank: false)

    }
}
