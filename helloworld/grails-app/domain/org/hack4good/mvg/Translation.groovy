package org.hack4good.mvg

class Translation {

    int userId
    int captionId
    String translation

    static belongsTo = [user: User, caption: Caption]



    static constraints = {
        userId(unique: false, blank: false)
        captionId(unique: false, blank: false)
        translation(unique: false, blank: false)
    }

    static hasOne = [caption : Caption]
}
