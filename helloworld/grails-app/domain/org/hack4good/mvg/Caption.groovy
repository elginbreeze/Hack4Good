package org.hack4good.mvg

class Caption {

    int captionId
    int videoId
    String caption
    int startingPoint
    int endPoint
    int accuracy

    static belongsTo = [video : Video]

    static hasMany = [translations: Translation]

    static constraints = {
        startingPoint(unique: true, blank: false)
        endPoint(unique: true, blank: false)
    }
}
