package org.hack4good.mvg

class Translation {

    String translation

    static belongsTo = [user: User, caption: Caption]
    static hasOne = [caption : Caption]

    static constraints = {
        translation(unique: false, blank: false)
    }
}
