from django import template

register = template.Library()

MAX_RATING = 5


def clamp(value):
    try:
        value = int(value)
    except (TypeError, ValueError):
        return 0

    return max(0, min(value, MAX_RATING))


@register.filter
def star_data(value):
    try:
        value = int(value)
    except (TypeError, ValueError):
        value = 0

    value = max(0, min(value, 5))

    return {
        "full": range(value),
        "empty": range(5 - value)
    }